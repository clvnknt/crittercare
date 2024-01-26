<!DOCTYPE html>
<html>
<head>
    <style>
        /* Custom CSS */
        .navbar-dark.bg-dark {
            background-color: #EAA4D9 !important;
        }

        .navbar-dark .navbar-brand .navbar-text {
            color: #000 !important;
        }

        .navbar-dark .navbar-nav .nav-item .nav-link {
            color: #000 !important;
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
        <a class="navbar-brand" href="{{ route('users.user-dashboard') }}">
            <img src="{{ asset('site-logos/variations-01.png') }}" alt="CritterCare" width="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('u/dashboard*') ? 'active-link' : '' }}">
                        <a class="nav-link" href="{{ route('users.user-dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('u/adopt/*', 'u/adopted-pets', 'u/adoption-requests') ? 'active-link' : '' }}">
                        <a class="nav-link" href="{{ route('users.available-pets.index') }}">Adopt</a>
                    </li>
                    <li class="nav-item {{ Request::is('u/missing-pets*') ? 'active-link' : '' }}">
                        <a class="nav-link" href="{{ route('users.missing-pets') }}">Missing Pets</a>
                    </li>
                    <li class="nav-item {{ Request::is('u/reports*') ? 'active-link' : '' }}">
                        <a class="nav-link" href="{{ route('users.reports.index') }}">Reports</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome, {{ Auth::user()->first_name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('users.account-settings') }}">Account Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap CSS and JS scripts here -->
</body>
</html>
