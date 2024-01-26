@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8 text-center">
            <!-- Add the CritterCare logo here -->
            <img src="{{ asset('site-media/landpage.png') }}" alt="CritterCare Logo" class="img-design1 img-fluid img-mobile">
            <h1 class="display-7 mb-4">Welcome to CritterCare</h1>
            <h5>"Find Your Perfect Companion"</h5>
        </div>
    </div>
    
    <div class="row mt-4">
        <!-- First Card: Adopt a Pet -->
        <div class="col-md-12 col-lg-4 mb-3 mb-lg-0 d-none d-md-block">
            <div class="card bg-white text-black">
                <!-- First Logo -->
                <div class="card-icon" style="background-color: #ff549c; text-align: center; border-radius: 50%; padding: 10px; margin: 20px auto 0;">
                    <img src="{{ asset('site-media/adopt-now.png') }}" alt="Adopt a Pet Logo" style="width: 80px; height: 80px;">
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">Adopt a Pet</h2>
                    <p class="card-text">Discover your future furry friend and make a lifelong connection. Make a friend.</p>
                </div>
            </div>
        </div>
        
        <!-- Second Card: Missing a Pet -->
        <div class="col-md-12 col-lg-4 mb-3 mb-lg-0 d-none d-md-block">
            <div class="card bg-white text-black">
                <!-- Second Logo -->
                <div class="card-icon" style="background-color: #ff549c; text-align: center; border-radius: 50%; padding: 10px; margin: 20px auto 0;">
                    <img src="{{ asset('site-media/lost-doggo.png') }}" alt="Missing a Pet Logo" style="width: 80px; height: 80px;">
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">Missing a Pet?</h2>
                    <p class="card-text">Refer to find lost pets in your community and help them reunite with their families.</p>
                </div>
            </div>
        </div>
        <!-- Third Card: Report Cases -->
        <div class="col-md-12 col-lg-4 d-none d-md-block">
            <div class="card bg-white text-black">
                <!-- Third Logo -->
                <div class="card-icon" style="background-color: #ff549c; text-align: center; border-radius: 50%; padding: 10px; margin: 20px auto 0;">
                    <img src="{{ asset('site-media/thecases.png') }}" alt="Report Cases Logo" style="width: 80px; height: 80px;">
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title">Report Cases</h2>
                    <p class="card-text">Help us ensure the safety and well-being of pets by reporting any concerns.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 d-none d-md-block">
            <p class="quote-phrase">"Where Every Pet Finds a Loving Home."</p>
        </div>
    </div>

    <section class="about_section layout_padding d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">
                    <div class="img-box">
                        <img src="site-media/1.png" alt="Image" style="width: 40%;">
                    </div>
                </div>
                <div class="col-md-6 order-md-2">
                    <div class="detail-box" style="padding: 50px;">
                        <div class="heading_container">
                            <h1>Adopt a Furry Friend</h1>
                        </div>
                        <p>Find your perfect companion among a variety of dogs and cats ready to be adopted into loving homes.</p>
                        <a href="">Find a friend now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section 2 -->
    <section class="about_section layout_padding d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="img-box">
                        <img src="site-media/4.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="detail-box" style="padding: 50px;">
                        <div class="heading_container">
                            <h1>Responsible Pet Ownership</h1>
                        </div>
                        <p>We provide resources and guidance to ensure you have a fulfilling and responsible experience as a pet owner.</p>
                        <a href="https://www.facebook.com/ACVeterinaryOffice">Visit our Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row mt-5">
        <!-- Fourth Card: Centered Login/Register -->
        <div class="col-md-12">
            <div class="card bg-white text-black mx-auto mb-4">
                <div class="card-body text-center">
                    <h2 class="card-title">Join CritterCare</h2>
                    <p class="card-text">Already have an account? Log in here or register to join our community.</p>
                    <div class="row mt-2">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <a href="{{ route('login') }}" class="btn btn-custom btn-lg btn-block rounded-pill">Login</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('register') }}" class="btn btn-custom btn-lg btn-block rounded-pill">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    .btn-custom {
        background-color: #F4C67F;
        color: #000;
        border-color: #F4C67F;
    }

    .img-mobile {
        max-width: 50%; /* Set the maximum width to 100% for responsiveness */
        height: auto; /* Ensure the image retains its aspect ratio */
        margin-bottom: 20px; /* Add some space at the bottom */
    }
</style>
@endsection
