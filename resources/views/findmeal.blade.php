@extends('templates.index')
@section('content')
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

<form class="meal-form" method="POST" action="/findmeal/post">
    @csrf
    <!-- Pertanyaan 1 -->
    <div class="form-group">
        <h2>What are you craving right now?</h2>
        <div class="radio-group">
            <label>
                <input type="radio" name="type" value="savory" />
                Savory 🍜
            </label>
            <label>
                <input type="radio" name="type" value="sweet" />
                Sweet 🍰
            </label>
            <label>
                <input type="radio" name="type" value="spicy" />
                Spicy 🌶
            </label>
        </div>
    </div>

    <!-- Pertanyaan 2 -->
    <div class="form-group">
        <h2>How heavy do you want your meal?</h2>
        <div class="radio-group">
            <label>
                <input type="radio" name="mealtype" value="heavy" />
                Heavy 🍛
            </label>
            <label>
                <input type="radio" name="mealtype" value="not heavy" />
                Light 🍲
            </label>
        </div>
    </div>

    <!-- Pertanyaan 3 -->
    <div class="form-group">
        <h2>Do you have any specific dietary needs?</h2>
        <div class="radio-group">
            <label>
                <input type="radio" name="dietary_needs" value="healthy" />
                Healthy 🥗
            </label>
            <label>
                <input type="radio" name="dietary_needs" value="anything" />
                Anything
            </label>
        </div>
    </div>

    <!-- Pertanyaan 4 -->
    <div class="form-group">
        <h2>Do you have a favorite cuisine?</h2>
        <div class="radio-group-1">
            <label>
                <input type="radio" name="cuisine_category" value="japanese" />
                Japanese 🍣
            </label>
            <label>
                <input type="radio" name="cuisine_category" value="italian" />
                Italian 🍝
            </label>
            <label>
                <input type="radio" name="cuisine_category" value="mexican" />
                Mexican 🌮
            </label>
            <label>
                <input type="radio" name="cuisine_category" value="indian" />
                Indian 🍛
            </label>
            <label>
                <input type="radio" name="cuisine_category" value="american" />
                American 🍔
            </label>
            <label>
                <input type="radio" name="cuisine_category" value="anything" />
                Anything works!
            </label>
        </div>
    </div>

    <!-- Pertanyaan 5 -->
    <div class="form-group">
        <h2>Do you have any ingredient restrictions?</h2>
        <div class="radio-group">
            <label>
                <input type="radio" name="ingredients-restriction" value="red meat" />
                No Red Meat 🥩
            </label>
            <label>
                <input type="radio" name="ingredients-restriction" value="dairy" />
                No Dairy 🥛
            </label>
            <label>
                <input type="radio" name="ingredients-restriction" value="nuts" />
                No Nuts 🥜
            </label>
            <label>
                <input type="radio" name="ingredients-restriction" value="eggs" />
                No Eggs 🥚
            </label>
            <label>
                <input type="radio" name="ingredients-restriction" value="no restrictions" />
                No Restrictions ❌
            </label>
        </div>
    </div>

    <!-- Pertanyaan 6 -->
    <div class="form-group">
        <h2>Are you looking for breakfast, lunch or dinner?</h2>
        <div class="radio-group-2">
            <label>
                <input type="radio" name="time" value="breakfast" />
                Breakfast 🍳
            </label>
            <label>
                <input type="radio" name="time" value="lunch" />
                Lunch 🍔
            </label>
            <label>
                <input type="radio" name="time" value="dinner" />
                Dinner 🍽
            </label>
            <label>
                <input type="radio" name="time" value="snack" />
                Snack 🍿
            </label>
        </div>
    </div>

    <!-- Tombol Submit -->
    <div class="tombol-bawah">
        <button type="submit" class="submit-btn">Show My Meals →</button>
    </div>
</form>
@endsection