@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1 class="display-5 text-dark font-weight-bold">Pet Surrendering Dashboard</h1>
            <p class="mt-2 text-dark">Manage pet surrendering requests and surrenders.</p>
        </div>
    </div>
</div>

<div class="container mt-4">
    <style>
        .custom-card {
            background-color: #333;
            color: white;
        }

        .dark-description {
            color: white;
        }

        /* Display buttons horizontally and vertically align them */
        .actions {
            display: flex;
            flex-wrap: wrap; /* Wrap buttons to the next line if necessary */
            align-items: center;
            gap: 20px; /* Adjust the spacing between buttons as needed */
        }

        /* Style the buttons in the actions column */
        .actions .btn {
            color: white !important;
        }

        .card-icon {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <img src="{{ asset('icons/no-icon.png') }}" alt="Surrender Form Icon" class="card-icon mb-3">
                    <h5 class="card-title">Surrender Form</h5>
                    <p class="dark-description">Complete the pet surrender form.</p>
                    <a href="{{ route('users.pet-surrender.form') }}" class="btn btn-primary btn-block">Go to Form</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <img src="{{ asset('icons/no-icon.png') }}" alt="Surrenderer Requests Icon" class="card-icon mb-3">
                    <h5 class="card-title">Surrenderer Requests</h5>
                    <p class="dark-description">View requests from pet surrenderers.</p>
                    <a href="{{ route('users.pet-surrender.requests') }}" class="btn btn-success btn-block">View Requests</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <img src="{{ asset('icons/no-icon.png') }}" alt="Surrenders Icon" class="card-icon mb-3">
                    <h5 class="card-title">Surrenders</h5>
                    <p class="dark-description">View successful and failed surrenders.</p>
                    <a href="{{ route('users.pet-surrender.surrenders') }}" class="btn btn-info btn-block">View Surrenders</a>
                </div>
            </div>
        </div>
        <!-- Add more buttons as needed -->
    </div>
</div>
</div>
@endsection
