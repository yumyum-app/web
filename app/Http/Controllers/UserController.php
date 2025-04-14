<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Meal;
use App\Models\Favorite;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
    }

    public function favbefore()
    {
        return view('favoritebefore');
    }

    public function favafter()
    {
        // Get the authenticated user
        $user = auth()->user();
        // Get user favorites joined with meals
        $favorites = Favorite::where('user_id', $user->id)
        ->join('meals', 'favorites.meal_id', '=', 'meals.id')
        ->select('favorites.id as favorite_id', 'favorites.*', 'meals.*')
        ->get();
        return view('favoriteafter', compact('favorites'));
    }

    public function deletefavorite(Favorite $favorite)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Get the authenticated user
            $user = auth()->user();

            // Check if the favorite belongs to the authenticated user
            if ($favorite->user_id === $user->id) {
                $favorite->delete();
                return redirect('/favorite')->with('success', 'Favorite deleted successfully!');
            } else {
                return redirect('/favorite')->with('error', 'You do not have permission to delete this favorite.');
            }
        } else {
            return redirect('/login')->with('error', 'Please log in to delete favorites.');
        }
    }

    public function updateprofileaction()
    {
        // Validate incoming request data
        $validatedData = request()->validate([
            'name' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:15',
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Update user profile
        $user->name = $validatedData['name'];
        $user->phonenumber = $validatedData['phonenumber'];

        if ($validatedData['password']) {
            $user->password = bcrypt($validatedData['password']);
        }

        $user->save();

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }
    

    public function findmeal()
    {
        return view('findmeal');
    }

    public function login()
    {
        return view('login');
    }

    public function menu()
    {
        $meals = Meal::all();
        // Convert each meal's category to Pascal Case
        foreach ($meals as $meal) {
            $meal->category = ucwords(strtolower($meal->category));
        }
        return view('menu',compact('meals'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function profileEdit()
    {
        return view('profileEdit');
    }

    public function profileUpload()
    {
        return view('profileUpload');
    }

    public function register()
    {
        return view('register');
    }

    public function checkdetailmeal(Meal $meal)
    {
        // Change $meal->category into Pascal Case
        $meal->category = ucwords(strtolower($meal->category));

        // Parse string from $meal->ingridients with ^ as a separator with Pascal Case format
        $ingredients = preg_split('/\s*\^\s*/', $meal->ingridients);
        // Convert each ingredient to Pascal Case
        $ingredients = array_map(function($ingredient) {
            return ucwords(strtolower($ingredient));
        }, $ingredients);
        return view('showmymeal-checkdetail',compact('meal','ingredients'));
    }
    public function loginaction(Request $request)
    {
        if(auth()->attempt($request->only("email", "password"))) {
            return redirect("/");
        }
        else {
            return redirect("/login")->with("error", "invalid email or password"); 
        }

    }

    public function registeraction(Request $request)
    {
        $request->validate([
            "name" => "required",
            "phonenumber" => "required",
            "email"=> "required|email|unique:users,email",
            "password"=>"required"
        ]);
        $data=new User;
        $data->name=$request->name;
        $data->phonenumber=$request->phonenumber;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->save();
        return redirect("/login")->with("success","Account has been created!");

    }

    public function findmealaction(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'type'                  => 'required|string',
            'mealtype'              => 'required|string',
            'dietary_needs'         => 'required|string',
            'cuisine_category'      => 'required|string',
            'ingredients-restriction' => 'required|string',
            'time'                  => 'required|string',
        ]);

        // Prepare the payload for the Python API
        $payload = [
            'data' => [
                'type'                  => $validatedData['type'],
                'mealtype'              => $validatedData['mealtype'],
                'dietary_needs'         => $validatedData['dietary_needs'],
                'cuisine_category'      => $validatedData['cuisine_category'],
                'ingredients-restriction' => $validatedData['ingredients-restriction'],
                'time'                  => $validatedData['time'],
            ]
        ];

        // Define the Python API endpoint URL (update as needed)
        $pythonApiUrl = 'http://127.0.0.1:5000/predict';

        // Send a POST request to the Python API
        $response = Http::post($pythonApiUrl, $payload);

        // Check if the response is successful
        // dd($response->json());
        // If the request is successful, flash the response data to the session and redirect
        if ($response->successful()) {
            $apiData = $response->json();
            // Redirect to the next page with the API response data in the session flash data
            return redirect('/showmeal')->with('apiData', $apiData);
        } else {
            // If the API call failed, redirect back with an error message
            return redirect()->back()->withErrors([
                'api' => 'API error: ' . $response->status() . ' - ' . $response->body()
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }

    public function showmymeal()
    {
        // Retrieve the API response data from the session flash data
        $apiData = session('apiData');

        // Extract the ids from the response lists. Each id represents dataset_id of the Meal table.
        $mealIds = [];
        if (isset($apiData['lists']) && is_array($apiData['lists'])) {
            foreach ($apiData['lists'] as $meal) {
                // Ensure to cast the id as string if necessary, since dataset_id is stored as string.
                $mealIds[] = (string) $meal['id'];
            }
        }

        // Query the Meals model for records matching the returned ids (dataset_id field)
        $meals = Meal::whereIn('dataset_id', $mealIds)->get();

        // For each id in $mealIds, call the /similar endpoint and gather recommended ids
        $similarResults = [];
        foreach ($mealIds as $id) {
            $response = Http::post('http://127.0.0.1:5000/similar', [
                "data" => [
                    "food_id" => $id
                ]
            ]);

            if ($response->successful()) {
                $similarData = $response->json();
                // Our /similar endpoint returns data in the "results" key for multiple ids.
                // When a single food_id is provided, a list with one element is returned.
                if (isset($similarData['results']) && is_array($similarData['results']) && count($similarData['results']) > 0) {
                    $result = $similarData['results'][0];
                    // Store similar recommendations for the original food id
                    $similarResults[$id] = $result['similar'];
                } else {
                    $similarResults[$id] = [];
                }
            } else {
                $similarResults[$id] = [];
            }
        }

        // Group similar meal objects by their original food id.
        // Instead of using firstWhere() for each rec, collect all similar ids for each group and run one query per group.
        $groupedSimilar = [];
        foreach ($similarResults as $originalId => $recs) {
            $recIds = [];
            foreach ($recs as $rec) {
                $recIds[] = (string) $rec['id'];
            }
            // Query the Meal model for all similar meal objects matching these IDs.
            $groupedSimilar[$originalId] = Meal::whereIn('dataset_id', $recIds)->get();
        }

        // Pass the fetched meals and grouped similar meals to the view
        return view('showmymeal', compact('meals', 'groupedSimilar'));
    }

    public function addfavorite(Meal $meal)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Get the authenticated user
            $user = auth()->user();

            $favorite = new Favorite();
            $favorite->user_id = $user->id;
            $favorite->meal_id = $meal->id;
            $favorite->save();

            // Redirect back with a success message
            return redirect('/favorite')->with('success', 'Meal added to favorites successfully!');
        } else {
            // Redirect to login page if not authenticated
            return redirect('/login')->with('error', 'Please log in to add favorites.');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
