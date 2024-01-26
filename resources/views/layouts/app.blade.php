<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your meta tags, title, and other stylesheets here -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CritterCare</title>
    <!-- Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon (Taskbar Icon) -->
    <link rel="icon" href="{{ asset('site-logos/variations-01.png') }}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Include the appropriate sidebar and navbar based on user role -->
    @if (Auth::user())
        @if (Auth::user()->isSuperAdmin)
            <!-- Include super admin navbar -->
            @include('layouts.navbar-super-admin')
        @elseif (Auth::user()->isAdmin)
            <!-- Include admin sidebar and navbar -->
            @include('layouts.sidebar-admin')
            @include('layouts.navbar-admin')
        @else
            <!-- Include user navbar by default for guests -->
            @include('layouts.navbar-user')
        @endif
    @else
        <!-- Include user navbar by default for guests -->
        @include('layouts.navbar-guest')
    @endif

    <!-- Your main content goes here -->
    <div class="container mt-5 flex-grow-1">
        @yield('content')
    </div>

    <!-- Include the user sidebar (conditionally) -->
    @if (Auth::user() && !Auth::user()->isAdmin && !Auth::user()->isSuperAdmin)
        @include('layouts.sidebar-user')
    @endif
    
    <!-- Include the footer -->
    @include('layouts.footer')
    
    <!-- JavaScript and other scripts go here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/user-sidebar.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
