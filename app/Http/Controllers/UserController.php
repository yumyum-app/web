<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('favoriteafter');
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
        return view('menu');
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

    public function checkdetailmeal()
    {
        return view('showmymeal-checkdetail');
    }

    public function showmymeal()
    {
        return view('showmymeal');
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
