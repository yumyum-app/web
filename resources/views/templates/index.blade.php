<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YumYum - Explore a World of Flavors</title>

    <link rel="stylesheet" href="{{ asset("style/global.css") }}">

    {{-- Menu Page CSS --}}
    @if(request()->is('menu'))
        <link rel="stylesheet" href="{{ asset("style/menu.css") }}">
    @endif

    {{-- Favorite --}}
    @if(request()->is('favorite'))
        <link rel="stylesheet" href="{{ asset("style/favoriteafter.css") }}">
        @if (!auth()->user())
            <link rel="stylesheet" href="{{ asset("style/favoritebefore.css") }}">
        @endif
    @endif
    {{-- Find Meal --}}
    @if(request()->is('findmeal'))
        <link rel="stylesheet" href="{{ asset("style/findmeal-style.css") }}">
    @endif

    {{-- Homepage --}}
    @if(request()->is('/'))
        <link rel="stylesheet" href="{{ asset("style/homepage.css") }}">
    @endif

    {{-- Login --}}
    @if(request()->is('login') || request()->is('register'))
        <link rel="stylesheet" href="{{ asset("style/login.css") }}">
    @endif
    
    {{-- Profile --}}
    @if(request()->is('profile'))
        <link rel="stylesheet" href="{{ asset("style/profile.css") }}">
    @endif

    {{-- Profile Edit --}}
    @if (request()->is('edit-profile'))
        <link rel="stylesheet" href="{{ asset("style/profileEdit.css") }}">
        <script src="{{ asset("script/profileEdit.js") }}"></script>
    @endif
    {{-- Profile Upload --}}
    @if (request()->is('uploadprofile'))
        <link rel="stylesheet" href="{{ asset("style/profileUpload.css") }}">
        <script src="{{ asset("script/profileUpload.js") }}"></script>
    @endif

    {{-- Footer --}}
    <link rel="stylesheet" href="{{ asset("style/footer.css") }}">

    {{-- Register --}}
    @if(request()->is('register'))
        <link rel="stylesheet" href="{{ asset("style/register.css") }}">
    @endif
    {{-- Show My Meal --}}
    @if(request()->is('showmeal'))
        <link rel="stylesheet" href="{{ asset("style/showmymeal-styles.css") }}">
        <script src="{{ asset("scripts/showmymeal-script.js") }}"></script>
    @endif
    {{-- JS --}}
    <script type="module" src="{{ asset("scripts/homepage.js") }}"></script>
    
    @if(request()->is('showmealdetails/*'))
        <link rel="stylesheet" href="{{ asset("style/checkdetail-style.css") }}">   
    @endif

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logocontainer"> 
            <img src="../img/japanese-food.png" alt="yum yum" class="logo-img">
            <div class="logo">YumYum</div>
        </div>
        <nav>
            <ul>
                <li>
                    <a class="{{ request()->is('/')? 'menulink' : '' }}" href="/">Home</a>
                    <a class="{{ request()->is('findmeal')? 'menulink' : '' }}"href="/findmeal">Find</a>
                    <a class="{{ request()->is('menu')? 'menulink' : '' }}"class="menulink"href="/menu">Menu</a>
                    <a class="{{ request()->is('favorite')? 'menulink' : '' }}"href="/favorite">Favorites</a>
                    @if (auth()->user())
                    <div class="profile">
                        <img src="../img/Ellipse 45.png">
                        <a href="/profile">{{ auth()->user()->name }}</a>
                    </div>
                    @else
                        <a class="loginlink" href="/login">Login</a>
                    @endif
                </li>
            </ul>
        </nav>
    </header>
   
    @yield('content')

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
                <a href="favorites.html"><p>Favourites</p></a>
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
</body>
</html>
