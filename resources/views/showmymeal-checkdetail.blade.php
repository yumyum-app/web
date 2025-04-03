<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yumyum app</title>
    <link rel="stylesheet" href="{{ asset("style/checkdetail-style.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    
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
                    <a href="homepage.html">Home</a>
                    <a class="find" href="findmeal.html">Find</a>
                    <a href="menu.html">Menu</a>
                    <a class="favoritelink" href="favoriteafter.html">Favorites</a>
                    <div class="profile">
                        <img src="../img/Ellipse 45.png">
                        <a href="profile.html">Sabrina</a>
                    </div>
                </li>
            </ul>
        </nav>
        
    </header>
    <section class="upper-section">
        <!-- <button class="back-button" onclick="history.back()">&#8592;</button> -->
        <button onclick="window.location.href='showmymeal.html'" class="back-button">&#8592;</button>
        <h1>Sushi Salmon</h1>
        <p> A healthy and delicious sushi made with fresh salmon, seasoned rice, and wrapped in nori seaweed.</p>
    </section>
    <section class="lower-section">
        <div class="meal-info">
            <img src="../img/content.png" alt="Sushi Salmon">
            <div class="info-text">
                <p><strong>Category:</strong> Japanese, Healthy</p>
                <p><strong>Calories:</strong> 250Kcal</p>
                <p><strong>Main Ingredients:</strong></p>
                <ul>
                    <li>Fresh Salmon</li>
                    <li>Sushi Rice</li>
                    <li>Nori Seaweed</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    
    <div class="footer">
        <div class="footer-content">
            <div class="footer-1">
                <img src="../img/Logo.png" alt="Logo">
                <p>In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
                <div class="footer-1-icons">
                    <a href="https://twitter.com" target="_blank"><img src="../img/1.png" alt="Twitter"></a>
                    <a href="https://facebook.com" target="_blank"><img src="../img/2.png" alt="Facebook"></a>
                    <a href="https://instagram.com" target="_blank"><img src="../img/3.png" alt="Instagram"></a>
                    <a href="https://linkedin.com" target="_blank"><img src="../img/4.png" alt="LinkedIn"></a>
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
                        <a href="https://instagram.com"><img src="../img/Mask group-ramen.png" alt="Picture 1"></a>
                        <a href="https://instagram.com"><img src="../img/Mask group (1).png" alt="Picture 2"></a>
                    </div>
                    <div class="image-wrapper-row">
                        <a href="https://instagram.com"><img src="../img/Mask group (2).png" alt="Picture 3"></a>
                        <a href="https://instagram.com"><img src="../img/Mask group (3).png" alt="Picture 4"></a>
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