@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card custom-card mb-4">
        <div class="card-body">
            <h2 class="card-title custom-card-title">Adoption Request Details</h2>
            <hr class="custom-divider">

            <!-- Pet Information including Photo -->
            <div class="custom-section">
                <h3 class="custom-section-title">Pet Information</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="dark-img-container">
                            @if ($adoptionRequest->pet->photo)
                                <img src="{{ asset('storage/media/adoption/' . $adoptionRequest->pet->photo) }}" alt="Pet Photo" class="img-fluid custom-pet-img">
                            @else
                                @if ($adoptionRequest->pet->type === 'Dog')
                                    <img src="{{ asset('icons/no-pic-dog.png') }}" alt="No Dog Image Available" class="img-fluid custom-pet-img">
                                @elseif ($adoptionRequest->pet->type === 'Cat')
                                    <img src="{{ asset('icons/no-pic-cat.png') }}" alt="No Cat Image Available" class="img-fluid custom-pet-img">
                                @endif
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- Display pet information in a clean format -->
                        <div class="pet-info">
                            <strong class="small-text">Name:</strong> {{ $adoptionRequest->pet->pet_name }}
                        </div>
                        <div class="pet-info">
                            <strong class="small-text">Breed:</strong> {{ $adoptionRequest->pet->species }}
                        </div>
                        <div class="pet-info">
                            <strong class="small-text">Age:</strong> {{ $adoptionRequest->pet->age_years }} years {{ $adoptionRequest->pet->age_months }} months
                        </div>
                        <div class="pet-info">
                            <strong class="small-text">Description:</strong> {{ $adoptionRequest->pet->description }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Adoption Request Information -->
            <div class="custom-section mt-3">
                <h3 class="custom-section-title">Adoption Request Information</h3>
                <div class="row">
                    <div class="col-md-6">
                        <!-- Display adoption request information in a clean format -->
                        <div class="adoption-info">
                            <strong class="small-text">Requested Date:</strong> {{ $adoptionRequest->created_at->format('F j, Y') }}
                        </div>
                        <div class="adoption-info">
                            <strong class="small-text">Reason:</strong> {{ $adoptionRequest->reason }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="adoption-info">
                            <strong class="small-text">Status:</strong> {{ $adoptionRequest->adoptionStatus->status }}
                        </div>
                    </div>
                </div>

                <!-- Display notes or N/A in a clean format -->
                <h4 class="custom-section-title mt-3">Notes</h4>
                <div class="form-group notes-info">
                    {{ $adoptionRequest->notes ? $adoptionRequest->notes : 'N/A' }}
                </div>

                <!-- Display warning message for pending status -->
                @if ($adoptionRequest->adoptionStatus->status === 'pending')
                    <div class="alert alert-warning mt-3 small-text">
                        <p>Please go to the Angeles City Veterinary Office for a further interview regarding your adoption request. Expect a call from our office for more details.</p>
                    </div>
                @endif
            </div>

            <!-- Back button -->
            <div class="text-left mt-3">
                <a href="{{ route('users.adoption-requests') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-card {
        max-width: 100%;
        background-color: #FFF8EA;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-divider {
        border: 1px solid #dee2e6;
        margin-top: 10px;
    }

    .custom-card-title {
        font-size: 1.5rem;
    }

    .custom-section {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .dark-img-container {
        background-color: #333;
        border-radius: 8px;
        padding: 10px;
    }

    .custom-pet-img {
        max-width: 100%;
        max-height: 150px;
        border-radius: 8px;
    }

    .custom-section-title {
        color: #333;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .shorter-input {
        width: 100%;
    }

    .pet-info, .adoption-info, .notes-info {
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .small-text {
        font-size: 0.8rem; /* Adjusted font size for smaller screens */
    }

    /* Adjust mobile view styles */
    @media (max-width: 576px) {
        .custom-card, .custom-section {
            padding: 15px;
        }

        .custom-card-title {
            font-size: 1.3rem;
        }

        .custom-section-title {
            font-size: 1.4rem;
        }

        .pet-info, .adoption-info, .notes-info {
            margin-bottom: 10px;
        }

        .custom-pet-img {
            max-height: 120px;
        }

        .small-text {
            font-size: 0.7rem; /* Further reduced font size for smaller screens */
        }
    }
</style>
@endsection
