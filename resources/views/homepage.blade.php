@extends('templates.index')

@section('content')
<div class="hero">
    <img src="../img/image 110.png" alt="">
    <div class="content">
        <h1>Good Taste</h1>
        <h1>Good Sense</h1>
        <p>Not sure what to eat? Let us find the perfect match for you</p>
        <div class="buttons">
            <a href="/findmeal">
                <button class="btn primary">Find Your Perfect Meal</button>
            </a>
            <a href="/menu">
                <button class="btn secondary">Explore Menu</button>
            </a>
        </div>
    </div>
</div>
{{-- <div class="container">
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
</div> --}}

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
@endsection