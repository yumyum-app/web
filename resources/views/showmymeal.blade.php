@extends('templates.index')

@section('content')
    <section class="recommended-section">
        <h1>Here Are Your Recommended Meals!</h1>
        <p>Based on your selections, here are the best meals for you.</p>
        <div class="meal-container">
            @foreach($meals as $meal)
            <div class="meal-card">
                <img src="{{ $meal->image_url }}" alt="Sushi Salmon">   
                
                <div class="meal-info">
                    <p class="meal-category">{{ $meal->category }}
                        <a href="/add-favorite/{{ $meal->id }}">
                            <img src="{{ asset('img/Vector.svg') }}" alt="Favorite" class="favorite-icon">
                        </a>
                    </p>
                    <h3>{{ $meal->name }}</h3>
                    <a href="/showmealdetails/{{ $meal->id }}" class="btn">Check Details</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="tulisan">
            <p>view more recommendation</p>
            ↓ ↓ ↓
        </div>
    </section>

    <section class="more-meal">
        <h1>Here are more great meal options just for you!</h1>
        
        <div class="meal-container">
            @if (!empty($groupedSimilar))
                @foreach($groupedSimilar as $originalId => $similarMeals)
                    @foreach($similarMeals as $smeal)
                    <div class="meal-card">
                        <img src="{{ $smeal->image_url }}" alt="Sushi Salmon">
                        
                        <div class="meal-info">
                            <p class="meal-category">{{ $smeal->category }}
                                <a href="/add-favorite/{{ $meal->id }}">
                                    <img src="{{ asset('img/Vector.svg') }}" alt="Favorite" class="favorite-icon">
                                </a>
                            </p>
                            <h3>{{ $smeal->name }}</h3>
                            <a href="/showmealdetails/{{ $smeal->id }}" class="btn">Check Details</a>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            @endif
        </div>
        <div class="tombol-bawah">
            <a href="/findmeal" class="button-bottom-left">Take Test Again</a>
            <a href="/menu" class="button-bottom-right">Explore All menu</a>
        </div>
    </section>
@endsection 