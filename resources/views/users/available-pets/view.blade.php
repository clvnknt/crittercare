@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 mx-auto d-flex justify-content-center">
            <div class="card">
                <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #FF90C2; color: white; text-shadow: 0 0 0.8px black;"><h1>Adoption Details</h1></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 mb-3 mb-lg-0">
                            <div class="dark-bg">
                                @if ($pet->photo)
                                    <img src="{{ asset('storage/media/adoption/' . $pet->photo) }}" alt="{{ $pet->pet_name }}'s Photo" class="img-fluid">
                                @else
                                    @php
                                        $noPetImage = ($pet->type === 'Dog') ? 'no-pic-dog.png' : 'no-pic-cat.png';
                                    @endphp
                                    <img src="{{ asset('site-icons/' . $noPetImage) }}" alt="No {{ $pet->type }} Image Available" class="img-fluid">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h1 class="card-title">{{ $pet->pet_name }}</h1>

                            <div class="container bg-light p-3 rounded">
                                <p><strong>Type:</strong> {{ $pet->type }}</p>
                                <p><strong>Breed:</strong> {{ $pet->species }}</p>
                                <p><strong>Age:</strong> {{ $pet->gender }}</p>
                                <p><strong>Age:</strong> {{ $pet->age_years }} years {{ $pet->age_months }} months</p>
                                <p><strong>Description:</strong> {{ $pet->description }}</p>
                                <p><strong>Status:</strong>
                                @if ($petMonitoringStatus === 'Monitoring')
                                    <span class="text-danger">This pet is still being monitored. You cannot adopt it at the moment. You can adopt this pet once monitoring is complete.</span>
                                @else
                                    @if ($pet->up_for_adoption === 'Processing' || $pet->up_for_adoption === 'Adopted')
                                        <span class="text-success">Available for Adoption (Processing)</span>
                                    @else
                                        <span class="text-success">Available for Adoption</span>
                                    @endif
                                @endif
                                </p>
                            </div>

                            @if ($petMonitoringStatus !== 'Monitoring')
                                <!-- Display the "Adopt Now" button only when not monitoring -->
                                @if (auth()->user()->hasPendingAdoptionRequest())
                                    <!-- Display a prompt if the user has a pending adoption request -->
                                    <p class="card-text text-danger mt-2">
                                        You have a pending adoption request. Please finish your current adoption process before adopting again.
                                    </p>
                                @elseif (auth()->user()->additionalDetailsFilled)
                                    <!-- Pink button for Adopt Now -->
                                    <form method="GET" action="{{ route('users.pets.adopt', $pet->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-vcustom rounded-pill mt-2">Adopt Now</button>
                                    </form>
                                @else
                                    <p class="card-text text-danger mt-2">Please fill out your additional details before adopting.</p>
                                    <a href="{{ route('users.edit-additional-details') }}" class="btn mt-2">Fill Details</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Recommended Pets Section -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <h2 class="text-center">Recommended Pets</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($recommendedPets as $recommendedPet)
                <div class="col-6 col-md-3 mb-4">
                    <!-- Custom Card for Recommended Pets -->
                    <div class="card custom-card">
                        <!-- Pet Photo -->
                        <img src="{{ $recommendedPet->photo ? asset('storage/images/' . $recommendedPet->photo) : asset('site-icons/' . ($recommendedPet->type === 'Dog' ? 'no-pic-dog.png' : 'no-pic-cat.png')) }}" alt="{{ $recommendedPet->pet_name }}'s Photo" class="img-fluid dark-bg-img">

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $recommendedPet->pet_name }}</h5>
                            <!-- Add more information about the recommended pet if needed -->
                        </div>

                        <!-- Card Footer (Button) -->
                        <div class="card-footer text-center">
                            <a href="{{ route('users.available-pets.view', $recommendedPet->id) }}" class="btn btn-custom-view rounded-pill mt-2 btn-sm">
                                View Pet
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</div>

<style>
    .dark-bg {
        background-color: #333;
        padding: 10px;
        border-radius: 8px;
        text-align: center;
    }

    .dark-bg-img {
        background-color: #333;
        padding: 5px;
        border-radius: 8px;
    }


    .custom-card {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-deck {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .card {
        width: 100%;
        margin: 1rem;
    }

    @media (max-width: 768px) {
        .dark-bg-img, .dark-bg, .custom-card {
            margin: 0;
        }

        .custom-card {
            width: 100%; /* Make cards full-width */
            margin-bottom: 10px; /* Add some spacing between cards */
        }
    }

    .btn-vcustom {
        background-color: #AEDEFC;
        color: #000;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-vcustom:hover {
        background-color: #8DDFCB;
        color: #fff;
    }

    .btn-custom-view {
        background-color: #AEDEFC; /* Different color for "View Pet" button */
        color: #000;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom-view:hover {
        background-color: #0174BE; /* Change the background color when hovered */
        color: #fff; /* Change the text color when hovered */
    }
</style>

@endsection
