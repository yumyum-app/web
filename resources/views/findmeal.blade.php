<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Meal</title>
    <link rel="stylesheet" href="{{ asset("style/footer.css") }}">
    <link rel="stylesheet" href="{{ asset("style/findmeal-style.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
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
        <div class="head-container">
            <div class="image-container">
                <img src="../img/image 111.png" alt="Recommended Meal">
            </div>
            <div class="text-container">
                <h1>Let's Personalize Your Meal!</h1>
                <p>Based on your mood, now tell us more about your preferences.</p>
            </div>
        </div>
    </section>
    
    <form class="meal-form" method="POST" action="findmeal/post">
        @csrf
        <!-- Pertanyaan 1 -->
        <div class="form-group">
        <h2>What are you craving right now?</h2>
        <div class="radio-group">
            <label>
            <input type="radio" name="craving" value="savory" />
            Savory 🍜
            </label>
            <label>
            <input type="radio" name="craving" value="sweet" />
            Sweet 🍰
            </label>
            <label>
            <input type="radio" name="craving" value="spicy" />
            Spicy 🌶
            </label>
        </div>
        </div>
    
        <!-- Pertanyaan 2 -->
        <div class="form-group">
        <h2>How heavy do you want your meal?</h2>
        <div class="radio-group">
            <label>
            <input type="radio" name="meal_weight" value="heavy" />
            Heavy 🍛
            </label>
            <label>
            <input type="radio" name="meal_weight" value="light" />
            Light 🍲
            </label>
        </div>
        </div>
    
        <!-- Pertanyaan 3 -->
        <div class="form-group">
        <h2>Do you have any specific dietary needs?</h2>
        <div class="radio-group">
            <label>
            <input type="radio" name="diet_need" value="healthy" />
            Healthy 🥗
            </label>
            <label>
            <input type="radio" name="diet_need" value="anything" />
            Anything
            </label>
        </div>
        </div>
    
        <!-- Pertanyaan 4 -->
        <div class="form-group">
        <h2>Do you have a favorite cuisine?</h2>
        <div class="radio-group-1">
            <label>
            <input type="radio" name="cuisine" value="japanese" />
            Japanese 🍣
            </label>
            <label>
            <input type="radio" name="cuisine" value="italian" />
            Italian 🍝
            </label>
            <label>
            <input type="radio" name="cuisine" value="mexican" />
            Mexican 🌮
            </label>
            <label>
            <input type="radio" name="cuisine" value="indian" />
            Indian 🍛
            </label>
            <label>
            <input type="radio" name="cuisine" value="american" />
            American 🍔
            </label>
            <label>
            <input type="radio" name="cuisine" value="anything" />
            Anything works! 
            </label>
        </div>
        </div>
    
        <!-- Pertanyaan 5 -->
        <div class="form-group">
        <h2>Do you have any ingredient restrictions?</h2>
        <div class="radio-group">
            <label>
            <input type="radio" name="restriction" value="no_red_meat" />
            No Red Meat 🥩
            </label>
            <label>
            <input type="radio" name="restriction" value="no_dairy" />
            No Dairy 🥛
            </label>
            <label>
            <input type="radio" name="restriction" value="no_nuts" />
            No Nuts 🥜
            </label>
            <label>
            <input type="radio" name="restriction" value="no_eggs" />
            No Eggs 🥚
            </label>
            <label>
            <input type="radio" name="restriction" value="no_restrictions" />
            No Restrictions ❌
            </label>
        </div>
        </div>
    
        <!-- Pertanyaan 6 -->
        <div class="form-group">
        <h2>Are you looking for breakfast, lunch or dinner?</h2>
        <div class="radio-group-2">
            <label>
            <input type="radio" name="meal_time" value="breakfast" />
            Breakfast 🍳
            </label>
            <label>
            <input type="radio" name="meal_time" value="lunch" />
            Lunch 🍔
            </label>
            <label>
            <input type="radio" name="meal_time" value="dinner" />
            Dinner 🍽
            </label>
            <label>
            <input type="radio" name="meal_time" value="snack" />
            Snack 🍿
            </label>
        </div>
        </div>
    
        <!-- Tombol Submit -->
        <div class="tombol-bawah">
            <a href="../showmymeal/showmymeal.html" class="submit-btn">Show My Meals →</a>
        </div>
    </form>
    
    
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
</html>
