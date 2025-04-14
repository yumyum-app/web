@extends('templates.index')

@section('content')
@if (auth()->user())
<div class="div1">
    <p class="text1">Your Favorite Dishes, All in One Place</p>
    <p class="text2">Here are the meals you love the most.</p>
    <p class="text2">Easily access your saved favorites and enjoy your go-to dishes anytime!</p>
</div>

<section class="menu-grid">
    @foreach ($favorites as $favorite)
    <div class="menu-item">
        <img src="{{ $favorite->image_url }}" alt="Caesar Salad">
        <div class="menu-lower">
            <div class="menu-lower-0">
                <div class="menu-lower-1">
                    <p>{{ $favorite->category }}</p>
                    <h3>{{ $favorite->name }}</h3>
                </div>
                <div class="menu-lower-2">
                    <a href="/delete-favorite/{{ $favorite->favorite_id }}">
                        <img class="favorite-icon" src="{{ asset('img/Vector2.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <a href="/showmealdetails/{{ $favorite->meal_id }}">
                <button>Check Details</button>
            </a>
        </div>
    </div>
    @endforeach
</section>
</div>
<div class="footer">
    <div class="footer-content">
        <div class="footer-1">
            <img src="/img/Logo.png" alt="Logo">
            <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
            <div class="footer-1-icons">
                <a href="https://twitter.com" target="_blank"><img src="/img/1.png" alt="Twitter"></a>
                <a href="https://facebook.com" target="_blank"><img src="/img/2.png" alt="Facebook"></a>
                <a href="https://instagram.com" target="_blank"><img src="/img/3.png" alt="Instagram"></a>
                <a href="https://linkedin.com" target="_blank"><img src="/img/4.png" alt="LinkedIn"></a>
            </div>
        </div>

        <div class="footer-2">
            <div class="footer-2-1">
                <p>Pages</p>
            </div>
            <div class="footer-2-2">
            <a href="homepage.html"><p>Home</p></a>
            <a href="findMeal.html"><p>Find Meal</p></a>
            <a href="menu.html"><p>Menu</p></a>
            <a href="favourites.html"><p>Favourites</p></a>
            </div>
        </div>

        <div class="footer-3">
            <p>Follow Us On Instagram</p>
            <div class="image-wrapper">
                <div class="image-wrapper-row">
                    <a href="https://instagram.com"><img src="/img/Mask group-ramen.png" alt="Picture 1"></a>
                    <a href="https://instagram.com"><img src="/img/Mask group (1).png" alt="Picture 2"></a>
                </div>
                <div class="image-wrapper-row">
                    <a href="https://instagram.com"><img src="/img/Mask group (2).png" alt="Picture 3"></a>
                    <a href="https://instagram.com"><img src="/img/Mask group (3).png" alt="Picture 4"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>Copyright © 2023 Hashtag Developer. All Right<br>Reserved</p>
    </div>
</div>
@else 
<div class="div1">
    <p class="text1">Log in to Unlock Your Favorites</p>
    <p class="text2">Your favorite meals are waiting! Sign in now to view and manage your saved dishes anytime, anywhere.</p>
</div>
@endif
@endsection