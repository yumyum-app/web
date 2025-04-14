@extends('templates.index')

@section('content')
   <div class="relative">
    <div class="content-wrapper">
        <div class="hero-1-bg">
            <img src="/img/bg.png" alt="">
        </div>
        <div class="hero-1">
            <div class="login-title">
                <h1>Log In</h1>
            </div>
            <form class="hero-form" method="POST" action="/login/post">
                @csrf
                <div class="hero-content">
                    <div class="hero-content-wrapper">
                        <p>Email</p>
                        <div class="login-input"> 
                            <input type="text" placeholder="Enter email" name="email" required>
                        </div>
                    </div>
                    
                    <div class="hero-content-wrapper">
                        <p>Password</p>
                        <div class="login-input"> 
                            <input type="password" placeholder="Enter password" name="password" required>
                        </div>
                    </div>
        
                    <a href="#">
                        <button type="submit" class="btn">Log In</button>
                    </a>
                </div>
                <div class="register-link">
                    <p>Don't have an account? <a href="/register">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection