@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mt-5 dark-bg rounded-lg p-4">
        <h1 class="display-4 text-white font-weight-bold">Pending Surrender Requests</h1>
        <p class="text-white">Explore pending surrender requests. Review the details and take necessary actions.</p>
    </div>

    <div class="row mt-3">
        @foreach ($pendingRequests as $request)
            <div class="col-md-4 mb-3">
                <div class="card custom-card">
                    <!-- Display the photo at the top -->
                    <div class="dark-img-container">
                        @if ($request->photo)
                            <img src="{{ asset('storage/' . $request->photo) }}" class="card-img-top custom-card-img" alt="{{ $request->pet_name }}">
                        @else
                            @if ($request->type === 'Dog')
                                <img src="{{ asset('icons/no-pic-dog.png') }}" class="card-img-top custom-card-img" alt="No Dog Image Available">
                            @elseif ($request->type === 'Cat')
                                <img src="{{ asset('icons/no-pic-cat.png') }}" class="card-img-top custom-card-img" alt="No Cat Image Available">
                            @else
                                <img src="{{ asset('icons/no-pic-default.png') }}" class="card-img-top custom-card-img" alt="Default Image">
                            @endif
                        @endif
                    </div>
                    <div class="card-header bg-dark text-white">
                        {{ $request->pet_name }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Type: {{ $request->type }}</h5>
                        <p class="card-text">Species: {{ $request->species }}</p>
                        <p class="card-text">Age: {{ $request->age_years }} years {{ $request->age_months }} months</p>
                        <p class="card-text">Reason for Surrender: {{ $request->reason }}</p>
                        <!-- You can add more details here as needed -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .custom-card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .dark-bg {
        background-color: #333;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 10px;
    }

    .card-header {
        background-color: #333;
        color: #fff;
    }

    .dark-img-container {
        background-color: #333; /* Dark background color */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 200px; /* Set the desired height for the card images */
        overflow: hidden; /* Hide overflow to ensure equal width and height */
    }

    .custom-card-img {
        width: 100%; /* Ensure the image takes the full width of its container */
        height: auto; /* Maintain aspect ratio */
    }
</style>
</div>
@endsection
