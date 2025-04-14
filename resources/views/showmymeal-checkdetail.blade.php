@extends('templates.index')

@section('content')
    <section class="upper-section">
        <!-- <button class="back-button" onclick="history.back()">&#8592;</button> -->
        <button onclick="window.location.href='showmymeal.html'" class="back-button">&#8592;</button>
        <h1>{{ $meal->name }}</h1>
        <p>Recommended by Yumyum</p>
    </section>
    <section class="lower-section">
        <div class="meal-info">
            <img src="{{ $meal->image_url }}" alt="{{ $meal->name }}">
            <div class="info-text">
                <p><strong>Category:</strong> {{ $meal->category }}</p>
                <p><strong>Main Ingredients:</strong></p>
                <ul>
                    @foreach ($ingredients as $in)
                        <li>{{ $in }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    
    @endsection