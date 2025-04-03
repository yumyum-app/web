<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset("style/register.css") }}">
    <link rel="stylesheet" href="{{ asset("style/footer.css") }}">

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
                    <a href="#">Home</a>
                    <a href="#">Find</a>
                    <a href="">Menu</a>
                    <a class="favoritelink" href="">Favorites</a>
                    <div class="profile">
                        <img src="../img/Ellipse 45.png">
                        <a href="">Sabrina</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

   <div class="relative">
    <div class="content-wrapper">
        <div class="hero-1-bg">
            <img src="/img/bg.png" alt="">
        </div>
        
        <a href="login.html">
            <div class="back">
                <img src="/img/fluent-mdl2_back.png" alt="Back Icon">
            </div>
        </a>
        <div class="hero-1">
            <div class="login-title">
                <h1>Sign Up</h1>
            </div>
            <form class="hero-form" method="POST" action="/register/post">
                @csrf
                <div class="hero-content">
                    <div class="hero-content-wrapper-1">
                        <div class="hero-content-wrapper-1-1">
                            <p>Name</p>
                            <div class="login-input"> 
                                <input type="text" placeholder="Enter your name" name="name" required>
                            </div>
                        </div>
                        
                        <div class="hero-content-wrapper-1-1">
                            <p>Phone Number</p>
                            <div class="login-input"> 
                                <input type="text" placeholder="Enter phone number" name="phonenumber" required>
                            </div>
                        </div>
                    </div>

                    <div class="hero-content-wrapper">
                        <p>Email</p>
                        <div class="login-input"> 
                            <input type="text" placeholder="Enter email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="hero-content-wrapper">
                        <p>Password</p>
                        <div class="login-input"> 
                            <input type="text" placeholder="Enter password" name="password" required>
                        </div>
                    </div>
        
                    <a href="#">
                        <button type="submit" class="btn">Sign Up</button>
                    </a>
                </div>
                <div class="register-link">
                    <p>Have an account? <a href="register.html">Log In</a></p>
                </div>
            </form>
        </div>
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
   </div>
</body>
</html>