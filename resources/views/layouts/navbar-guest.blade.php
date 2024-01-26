<!DOCTYPE html>
<html>
<head>
    <style>
        /* Custom CSS */
        .navbar-dark.bg-dark {
            background-color: #EAA4D9 !important;
        }

        .navbar-dark .navbar-nav .nav-item .nav-link {
            color: #F5F7F8 !important;
            font-weight: bold;
        }

        .navbar-dark .navbar-nav .nav-item .nav-link:hover {
            color: #000 !important;
        }

        /* Customize the color of the toggle button */
        .navbar-toggler-icon {
            color: #000;
        }

         /* Add a custom class to style the active link */
        .active-link {
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landing') }}">
            <img src="{{ asset('site-logos/variations-01.png') }}" alt="CritterCare" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <!-- User navigation elements -->
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Include Bootstrap CSS and JS scripts here -->
</body>
</html>
