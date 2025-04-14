@extends('templates.index')
@section('content')
   <div class="relative">
    <div class="content-wrapper">
        <div class="box-bg"></div>

        <div class="box-content">
            <a href="profile.html">
                <img class="profileEdit-back-icon" src="/img/fluent-mdl2_back.png" alt="Back icon">
            </a>

            <div class="image-box">
                <img src="/img/Ellipse 6.png" alt="Profile Picture">
            </div>

            <div class="text-wrapper">
                <a href="/uploadprofile">
                    <button type="submit" class="upload-btn">Upload new photo</button>
                </a>
                <div class="upload-text">
                    <p>At least 800x800 px recommended.<br>JPG or PNG is allowed</p>
                </div>
            </div>

            
        </div>

        <div class="profile-data">
            <form class="profile-data-1">
                <div class="profile-data-2">
                    <p>Name:</p>
                    <div class="profile-data-3">
                        <input type="text" id="name" name="Name" value="John Doe" readonly>
                        <img src="/img/tabler_edit.png" alt="Edit Button">
                    </div>
                </div>

                <div class="profile-data-2">
                    <p>Email:</p>
                    <div class="profile-data-3">
                        <input type="text" id="email" name="Email" value="johndoe@gmail.com" readonly>
                    </div>
                </div>

                <div class="profile-data-2">
                    <p>Phone Number:</p>
                    <div class="profile-data-3">
                        <input type="text" id="phone" name="phonenumber" value="{{ auth()->user()->phonenumber }}" readonly>
                        <img src="/img/tabler_edit.png" alt="Edit Button">
                    </div>
                </div>
            </form>

            <button type="submit" class="p-btn">Save Changes</button>
        </div>
    </div>
@endsection