<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("style/homepage.css") }}">
    <link rel="stylesheet" href="{{ asset("style/footer.css") }}">
    <script type="module" src="{{ asset("scripts/homepage.js") }}"></script>
    <title>HomePage</title>

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
                    <a class="homelink" href="#">Home</a>
                    <a href="#">Find</a>  
                    <a href="">Menu</a>
                    <a href="">Favorites</a>
                    <a class="loginlink" href="">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="hero">
        <img src="../img/image 110.png" alt="">
        <div class="content">
            <h1>Good Taste</h1>
            <h1>Good Sense</h1>
            <p>Not sure what to eat? Let us find the perfect match for you</p>
            <div class="buttons">
                <button class="btn primary">Find Your Perfect Meal</button>
                <button class="btn secondary">Explore Menu</button>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>How Are You Feeling Today?</h1>
        <!-- <img src="../img/Init.png" alt=""> -->
        <div class="emoji-choose-container">
            <img class="emoji-choose" src="../img/emoji-1.png" alt="">
            <img class="emoji-choose" src="../img/emoji-2.png" alt="">
            <img class="emoji-choose" src="../img/emoji-3.png" alt="">
            <img class="emoji-choose" src="../img/emoji-4.png" alt="">
            <img class="emoji-choose" src="../img/emoji-5.png" alt="">
         </div>
        <p>What's your vibe today? Let's find a meal that suits it!</p>
        <div class="button-group">
            <div class="button1">
                <button class="option">I Need Comfort Food</button>
                <button class="option">Something to Cheer Me Up</button>
                <button class="option">I'm Just Hungry</button>
            </div>
            <div class="button2">
                <button class="option">Something Fun & Tasty</button>
                <button class="option">Surprise Me!</button>
            </div>
        </div>
        <button class="main-btn">Find Your Perfect Meal</button>
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

</body>
<script>
    document.querySelectorAll('.emoji-choose').forEach((element) => {
        element.addEventListener('click', () => {
            if (!element.src.includes('on'))
                element.src = element.src.replace('.png', '-on.png');
            else
                element.src = element.src.replace('-on.png', '.png');
        });
    });
</script>
</html>