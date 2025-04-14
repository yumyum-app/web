@extends('templates.index')

@section('content')
<section class="hero">
    <h1 class="text1">Explore a World of Flavors</h1>
    <p class="text2">Discover a diverse selection of delicious meals, from comforting classics to bold new tastes. Browse through our catalogue and find the perfect dish to satisfy your cravings!</p>
</section>

<section class="menu-grid">
    @foreach ($meals as $meal)
    <div class="menu-item">
        <img loading="lazy" src="{{ $meal->image_url }}" alt="{{ $meal->name }}">
        <div class="menu-lower">
            <div class="menu-lower-0">
                <div class="menu-lower-1">
                    <p>{{ $meal->category }}</p>
                    <h3>{{ $meal->name }}</h3>
                </div>
                <div class="menu-lower-2">
                    <img class="favorite-icon" src="../img/Vector.svg" alt="">
                </div>
            </div>
            <a href="/showmealdetails/{{ $meal->id }}">
                <button>Check Details</button>
            </a>
        </div>
    </div>
    @endforeach
</section>

<div class="gappp">

</div>

@endsection
