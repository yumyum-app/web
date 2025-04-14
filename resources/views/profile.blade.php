@extends('templates.index')

@section('content')
<div class="relative">
<div class="content-wrapper">
    <div class="box-bg"></div>

    <div class="box-content">
        <div class="image-box">
            <img src="../img/Ellipse 6.png" alt="Profile Picture">
        </div>

        <div class="text-wrapper">
            <div class="profile-name">{{ auth()->user()->name }}</div>
            <div class="profile-email">{{ auth()->user()->email }}</div>
        </div>
    </div>

    <div class="profile-data">
        <div class="profile-data-1">
            <div class="profile-data-2">
                <p>Phone Number:</p>
                <div class="profile-data-3">
                    <input type="text" id="pn" name="Phone Number" value="{{ auth()->user()->phonenumber }}" readonly>
                </div>
            </div>

            {{-- <div class="profile-data-2">
                <p>Address:</p>
                <div class="profile-data-3">
                    <input type="text" id="address" name="Address" value="Jl. Surya Kencana No. 10L, Bogor, Jawa Barat" readonly>
                </div>
            </div> --}}
        </div>

        <a href="/logout">
            <button class="p-btn">Log Out</button>
        </a>            
    </div>
</div>
@endsection