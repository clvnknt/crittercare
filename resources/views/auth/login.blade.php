@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-md-8 col-lg-6"> <!-- Adjust the column width -->
            <div class="card shadow" style="border-radius: 1rem; border-width: 5px; border-color: #8F336B;">
                <div class="card-body p-4 p-lg-5 text-black">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="text-center mb-4 pb-3"> <!-- Center the content -->
                        <img src="site-media/variations-01.png" alt="login form" class="img-fluid" style="border-radius: 1rem; max-width: 20%;" />
                            <h1 class="display-4">Welcome</h1> <!-- Removed the closing span tag -->
                        </div>

                        <h5 class="text-center mb-4 pb-3" style="letter-spacing: 1px;">Sign into your
                            account</h5>


                        <style>
                            @media (max-width: 576px) {
                                /* Adjust font size for smaller screens */
                                .form-outline input::placeholder {
                                    font-size: 12px;
                                }
                            }
                        </style>

                        <div class="form-outline mb-4">
                            <input type="text" id="email" name="email"
                                class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email or username" />
                            <label class="form-label" for="email">Email Address or Username</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong> <!-- Display error message -->
                            </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password"
                                class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror"
                                required autocomplete="current-password" placeholder="Enter your password" />
                            <label class="form-label" for="password">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong> <!-- Display error message -->
                            </span>
                            @enderror
                        </div>

                        <div class="pt-1 mb-4">
                        <button class="btn btn-lg btn-block rounded-pill btn-Lcustom" type="submit">Login</button>
                        </div>

                        <div class="mb-3 text-center">
                            <a class="small text-muted rounded-pill px-5 py-1" href="{{ route('forget.password.get') }}" style="margin-right: 10px;">Forgot password?</a>
                            <br><br>
                            <a class="small text-muted font-weight-bold rounded-pill px-3 py-1" href="#!">Don't have an account? <br>
                                 <a href="{{ route('register') }}" style="color: #393f81; font-weight: bold;">Register here</a></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn-Lcustom {
    background-color: #FACBEA;
        color: #000;
        border-color: #FACBEA;
        transition: background-color 0.3s ease;
    }

.btn-Lcustom:hover {
        background-color: #5FBDFF;
        color: #F5F7F8; 
    }

</style>
@endsection
