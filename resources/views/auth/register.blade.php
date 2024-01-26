@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow" style="border-radius: 1rem; border-width: 5px; border-color: #EB7DB0; margin-bottom: 40px;">
                    <div class="card-header" style="border-radius: 10px; border-width: 5px; background-color: #d0ecfc;">
                        <h1 class="text-center">Register for CritterCare</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" class="form-control rounded-pill @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                   
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input id="last_name" type="text" class="form-control rounded-pill @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name">
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="birthday">Birthday</label>
                                        <input id="birthday" type="date" class="form-control rounded-pill @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required placeholder="Birthday">
                                        @error('birthday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control rounded-pill @error('gender') is-invalid @enderror" name="gender" required>
                                            <option value="" disabled selected>Choose Gender</option>
                                            <option value="Male" {{ old('gender') === 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ old('gender') === 'Female' ? 'selected' : '' }}>Female</option>
                                            <option value="Other" {{ old('gender') === 'Other' ? 'selected' : '' }}>Other</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control rounded-pill @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                  
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                               
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input id="phone_number" type="tel" class="form-control rounded-pill @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required placeholder="ex. 09992555123" pattern="09\d{9}" inputmode="numeric" maxlength="11">
                                        </div>
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                   
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="ex. CritterPass_2023">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                  
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-md-3 mb-2">
                                    <a href="{{ route('landing') }}" class="btn btn-back btn-block rounded-pill text-white">Cancel</a>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <button type="submit" class="btn btn-custom btn-block rounded-pill">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-custom {
            background-color: #E8A0BF;
            color: #000;
            border-color: #F4C67F;
        }

        .btn-back {
            background-color: #454545;
            color: #000;
            border-color: #F4C67F;
        }

        .btn-back:hover {
            background-color: #BE3144;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            height: 45px;
        }

        .rounded-pill {
            border-radius: 20px;
        }

        .input-group-prepend,
        .input-group-append {
            height: 45px;
        }

        hr {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        input::placeholder,
        select::placeholder {
            font-size: 80%;
        }
    </style>

    <!-- Add JavaScript validation -->
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            var birthdayInput = document.getElementById('birthday');
            var birthday = new Date(birthdayInput.value);
            var today = new Date();
            var age = today.getFullYear() - birthday.getFullYear();

            // Adjust the age limit as needed
            if (age < 13) {
                alert('Sorry, you must be at least 13 years old to register.');
                event.preventDefault(); // Prevent form submission
            }
        });
    </script>
@endsection
