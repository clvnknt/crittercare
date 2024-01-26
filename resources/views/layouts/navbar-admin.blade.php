<nav class="navbar navbar-expand-md navbar-light" style="background-color: #1d1d1d;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admins.admin-dashboard') }}">
            <img src="{{ asset('site-media/logo2.png') }}" alt="CritterCare" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon custom-toggler">
                <i class="fas fa-bars" style="color: white;"></i>
            </span>
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
                <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.admin-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.pets.index') }}">Manage Pets</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.adoption-requests.view') }}">Adoption Requests</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.pet-monitoring.index') }}">Pet Monitoring</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.missing-pets.index') }}">Missing Pet Reports</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.case-types.index') }}">Case Types</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="{{ route('admins.reports.view') }}">User Reports</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome, Admin {{ Auth::user()->first_name }}
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

<style>
     .navbar {
        background-color: #1d1d1d; /* Set the background color of the navbar */
    }

    /* Custom CSS for making the entire mobile toggler white */
    @media (max-width: 767px) {
        .navbar-toggler-icon {
            background-color: #0000 !important; /* Set background color to white */
            border: 2px solid #0000 !important; /* Set border color to white */
        }

        .navbar-toggler {
            border: 2px solid #fff !important; /* Set border color to white */
        }
    }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important;
        }
    }

    /* Set font color of nav items to white */
    .navbar-nav .nav-item .nav-link {
        color: white !important;
    }

</style>
