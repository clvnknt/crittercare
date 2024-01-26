@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card bg-dark text-white">
                <div class="card-body text-center">
                    @if ($petSurrender->photo)
                        <div class="rounded overflow-hidden mx-auto mb-4" style="width: 150px; height: 150px;">
                            <img src="{{ asset('storage/' . $petSurrender->photo) }}" class="img-fluid h-100" alt="{{ $petSurrender->pet_name }}">
                        </div>
                    @endif

                    <h4 class="card-title">Pet Surrender Request Details</h4>
                    <h5 class="card-title mt-4">Pet Name: {{ $petSurrender->pet_name }}</h5>
                    <p class="card-text">Type: {{ $petSurrender->type }}</p>
                    <p class="card-text">Species: {{ $petSurrender->species }}</p>
                    <p class="card-text">Age: {{ $petSurrender->age_years }} years {{ $petSurrender->age_months }} months</p>
                    <p class="card-text">Reason for Surrender: {{ $petSurrender->reason }}</p>
                    <!-- Include other pet surrender request details here -->

                    <div class="mt-4">
                       <!-- Approve Form -->
                       <form method="POST" action="{{ route('admins.pet-surrenders.approve', ['petSurrender' => $petSurrender]) }}">
                        @csrf
                        <button type="submit" class="btn btn-success">Approve Request</button>
                    </form>

                    <!-- Reject Form -->
                    <form method="POST" action="{{ route('admins.pet-surrenders.reject', ['petSurrender' => $petSurrender]) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Reject Request</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
