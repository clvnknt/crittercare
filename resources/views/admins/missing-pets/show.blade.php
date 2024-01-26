@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #435585; color: white; text-shadow: 0 0 0.8px black;">
                    <h1>Missing Pet's Details</h1>
                </div>
                <div class="card-body">
                    <!-- Pet Information -->
                    <div class="pet-info">
                         <!-- Display pictures/videos if applicable -->
                         <div class="form-group">
                            <strong>Picture</strong>
                            @if ($missingPet->pictures)
                                <img src="{{ asset('storage/' . $missingPet->pictures) }}" class="img-fluid" alt="{{ $missingPet->pet_name }}">
                            @else
                                <p>No picture uploaded.</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <strong>Name</strong>
                            <p>{{ $missingPet->pet_name ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Type</strong>
                            <p>{{ $missingPet->type ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Species</strong>
                            <p>{{ $missingPet->species ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Age</strong>
                            <p>{{ $missingPet->age_years }} years {{ $missingPet->age_months }} months</p>
                        </div>

                        <div class="form-group">
                            <strong>Notable Features</strong>
                            <p>{{ $missingPet->notable_features ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Last Seen Location</strong>
                            <p>{{ $missingPet->last_seen_location ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Description</strong>
                            <p>{{ $missingPet->description ?? 'No information provided.' }}</p>
                        </div>

                        <!-- Display pictures/videos if applicable -->
                        @if ($missingPet->pictures)
                            <img src="{{ asset('storage/' . $missingPet->pictures) }}" class="img-fluid" alt="{{ $missingPet->pet_name }}">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #435585; color: white; text-shadow: 0 0 0.8px black;">
                    <h1>Contact Person's Details</h1>
                </div>
                <div class="card-body">
                    <!-- Contact Information -->
                    <div class="contact-info">
                        <div class="form-group">
                            <strong>Social Media</strong>
                            <p>{{ $missingPet->contact_social_media ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Phone Number</strong>
                            <p>{{ $missingPet->contact_phone ?? 'No information provided.' }}</p>
                        </div>

                        <div class="form-group">
                            <strong>Email</strong>
                            <p>{{ $missingPet->contact_email ?? 'No information provided.' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                    <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #435585; color: white; text-shadow: 0 0 0.8px black;">
                    <h1>Update Status</h1>
                    </div>
                <div class="card-body">
                    <form id="updateStatusForm" method="POST" action="{{ route('admins.missing-pets.update-status', ['missingPet' => $missingPet]) }}">
                        @csrf
                        <!-- Update Status Form -->
                        <div class="update-status-form">
                            <div class="form-group">
                                <strong>Current Status:</strong>
                                <p>{{ $missingPet->status ?? 'No information provided.' }}</p>
                            </div>
                            <div class="form-group">
                                <strong>Change Status:</strong>
                                <select name="status" class="form-control">
                                    <option value="open" {{ $missingPet->status === 'open' ? 'selected' : '' }}>Open</option>
                                    <option value="solved" {{ $missingPet->status === 'solved' ? 'selected' : '' }}>Solved</option>
                                    <option value="cancelled" {{ $missingPet->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#backConfirmationModal">Back</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateStatusConfirmationModal">Update</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Confirmation Modal for Back Button -->
<div class="modal fade" id="backConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="backConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="backConfirmationModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to go back? Any unsaved changes will be lost.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="{{ route('admins.missing-pets.index') }}" class="btn btn-primary">Yes, Go Back</a>
            </div>
        </div>
    </div>
</div>

<!-- Confirmation Modal for Update Status Button -->
<div class="modal fade" id="updateStatusConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="updateStatusConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStatusConfirmationModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to update the status?
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="updateStatusBtn">Yes, Update Status</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('updateStatusBtn').addEventListener('click', function() {
        document.getElementById('updateStatusForm').submit();
    });
</script>

@endsection
