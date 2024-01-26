@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mx-auto" style="max-width: 800px; margin: 20px auto;">
        <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #CE5A67; color: white; text-shadow: 0 0 0.8px black;">
            <h2>Missing Pet Info</h2>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-md-4 text-center">
    <div class="pet-image-container">
        @if ($missingPet->pictures)
            <img src="{{ asset('storage/' . $missingPet->pictures) }}" class="card-img-top" alt="{{ $missingPet->pet_name }}">
        @else
            @if ($missingPet->type === 'Dog')
                <img src="{{ asset('site-icons/no-pic-dog.png') }}" class="card-img-top" alt="No Dog Image Available">
            @elseif ($missingPet->type === 'Cat')
                <img src="{{ asset('site-icons/no-pic-cat.png') }}" class="card-img-top" alt="No Cat Image Available">
            @endif
        @endif
    </div>
    <p class="mt-3"><strong>{{ $missingPet->pet_name }}</strong></p>
</div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
                            <strong class="form-label">Missing Since:</strong>
                            <p>{{ \Carbon\Carbon::parse($missingPet->missing_since)->format('F j, Y') }}</p>
                        </div>
                        <div class="mb-3">
                            <strong class="form-label">Date Found:</strong>
                            <p>{{ $missingPet->date_found ? \Carbon\Carbon::parse($missingPet->date_found)->format('F j, Y') : 'Not Found' }}</p>
                        </div>
                            <div class="mb-3">
                                <strong class="form-label">Species:</strong>
                                <p>{{ $missingPet->species }}</p>
                            </div>
                            <div class="mb-3">
                                <strong class="form-label">Gender:</strong>
                                <p>{{ $missingPet->gender }}</p>
                            </div>        
                            <div class="mb-3">
                                <strong class="form-label">Age:</strong>
                                <p>{{ $missingPet->age_years }} years {{ $missingPet->age_months }} months</p>
                            </div>
                            <div class="mb-3">
                                <strong class="form-label">Notable Features:</strong>
                                <p>{{ $missingPet->notable_features }}</p>
                            </div>
                            <div class="mb-3">
                                <strong class="form-label">Last Seen Location:</strong>
                                <p>{{ $missingPet->last_seen_location }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <strong class="form-label">Pet Owner's Social Media:</strong>
                                <p>{{ $missingPet->contact_social_media }}</p>
                            </div>
                            <div class="mb-3">
                                <strong class="form-label">Pet Owner's Phone:</strong>
                                <p>{{ $missingPet->contact_phone }}</p>
                            </div>
                            <div class="mb-3">
                                <strong class="form-label">Pet Owner's Email:</strong>
                                <p>{{ $missingPet->contact_email }}</p>
                            </div>
                            <div class="mb-3">
                                <strong class="form-label">Description:</strong>
                                <p>{{ $missingPet->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
        <a href="{{ route('users.missing-pets') }}" class="btn btn-secondary">Back</a>
    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mx-auto" style="max-width: 800px; margin: 0px auto; border: none;">
        @if (auth()->user()->id === $missingPet->user_id)
            <div class="card-body">
                @if ($missingPet->status === 'pending')
                    <p class="alert alert-warning">This missing report is still being processed and awaiting approval by the admins.</p>
                @elseif ($missingPet->status === 'open')
                    <p class="alert alert-success">This report is public for all to see.</p>
                    <form method="POST" action="{{ route('users.missing-pets.update-status', ['missingPet' => $missingPet]) }}">
                        @csrf
                        <label for="status" class="form-label mt-3"><strong>Change Status:</strong></label>
                        <select name="status" class="form-control" id="statusSelect">
                            <option value="solved">Mark as Solved</option>
                            <option value="cancelled">Cancel Report</option>
                        </select>
                        <div class="mb-3" id="dateFoundInput" style="display: none;">
                            <label for="date_found" class="form-label"><strong>Date Found:</strong></label>
                            <input type="date" id="date_found" name="date_found" class="form-control" value="{{ old('date_found') }}">
                        </div>
                        <div class="text-left mt-3">
                            <button type="submit" class="btn btn-primary" id="updateStatusBtn" disabled>Update Status</button>
                        </div>
                    </form>
                @elseif ($missingPet->status === 'solved')
                    <!-- Rest of the code remains the same -->
                @elseif ($missingPet->status === 'cancelled')
                    <!-- Rest of the code remains the same -->
                @endif
            </div>
        @endif
    </div>
</div>

<script>
    const statusSelect = document.getElementById('statusSelect');
    const dateFoundInput = document.getElementById('dateFoundInput');
    const updateStatusBtn = document.getElementById('updateStatusBtn');
    const dateFoundField = document.getElementById('date_found');

    statusSelect.addEventListener('change', () => {
        if (statusSelect.value === 'solved') {
            dateFoundInput.style.display = 'block';
            updateStatusBtn.disabled = true; // Disable the button until a date is selected
        } else {
            dateFoundInput.style.display = 'none';
            updateStatusBtn.disabled = false; // Enable the button for canceling reports
        }
    });

    dateFoundField.addEventListener('change', () => {
        updateStatusBtn.disabled = !dateFoundField.value; // Enable the button only when a date is selected
    });
</script>

<style>
    .pet-image-container {
        background-color: #333; /* Dark gray background color */
        padding: 10px; /* Optional: Add some padding for spacing */
    }
    .pet-image-container img {
        max-width: 100%;
        height: auto;
    }
</style>


@endsection
