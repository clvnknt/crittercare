<nav class="navbar navbar-expand-md navbar-dark bg-dark"> <!-- Updated class for dark navbar -->
    <div class="container">
        <a class="navbar-brand" href="{{ route('super-admins.dashboard') }}">
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
                    <li class="nav-item">
                        <span class="nav-link text-white">Welcome, Super Admin {{ Auth::user()->first_name }}</span>
                    </li>
                    <li class="nav-item">
                            <button type="submit" class="btn btn-link text-white nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Logout</button>
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
    /* Add this CSS to your stylesheet or in a <style> tag in your HTML */
    .custom-home-link {
        color: #ffffff; /* Set the desired color for the "Home" link (white in this case) */
        /* You can adjust the color value to your preference */
        text-decoration: none; /* Optional: Remove underline if needed */
    }
    .navbar-dark.bg-dark {
            background-color: #000 !important;
        }

    .navbar-dark .navbar-nav .nav-item .nav-link {
            color: #F5F7F8 !important;
            font-weight: bold;
        }

        .navbar-dark .navbar-nav .nav-item .nav-link:hover {
            color: #F875AA !important;
        }

        /* Customize the color of the toggle button */
        .navbar-toggler-icon {
            color: #F875AA;
        }
</style>
