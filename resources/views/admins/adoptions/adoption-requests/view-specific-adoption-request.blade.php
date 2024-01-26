@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 800px;">
        <div class="card-header text-center text-black">
            Adoption Request Details
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            Adopter's Details
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Name:</strong></p>
                                    <p>{{ $adoptionRequest->user->first_name }}</p>

                                    <p><strong>Email:</strong></p>
                                    <p>{{ $adoptionRequest->user->email }}</p>

                                    <p><strong>Phone Number:</strong></p>
                                    <p>{{ $adoptionRequest->user->phone_number }}</p>
                                </div>

                                <div class="col-md-6">
                                    <p><strong>Province:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->province }}</p>

                                    <p><strong>City:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->city }}</p>

                                    <p><strong>Citizenship:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->citizenship }}</p>

                                    <p><strong>Occupation:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->occupation }}</p>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <p><strong>Spouse:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->spouse }}</p>

                                    <p><strong>Children Names:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->children_names }}</p>
                                </div>

                                <div class="col-md-6">
                                    <p><strong>Current Household Pets:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->current_household_pets }}</p>

                                    <p><strong>Visit Veterinarian:</strong></p>
                                    <p>{{ $adoptionRequest->user->additionalDetails->visit_veterinarian ? 'Yes' : 'No' }}</p>
      
                                    <p><strong>Valid ID:</strong></p>
                                    <img src="{{ asset('storage/' . $adoptionRequest->user->additionalDetails->valid_id) }}" class="img-fluid" style="max-width: 200px;" alt="Valid ID">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="height: 100%;">
                        <div class="card-header bg-secondary text-white">
                            Pet Details
                        </div>

                        <div class="card-body">
                            <p><strong>Pet Name</strong></p>
                            <p>{{ $adoptionRequest->pet->pet_name }}</p>

                            <p><strong>Breed</strong></p>
                            <p>{{ $adoptionRequest->pet->species }}</p>

                            <p><strong>Age</strong></p>
                            <p>{{ $adoptionRequest->pet->age_years }} years {{ $adoptionRequest->pet->age_months }} months</p>

                            <p><strong>Description</strong></p>
                            <p>{{ $adoptionRequest->pet->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-right mt-3">
                @if ($approvalStatus === 'approved')
                    <p>This adoption request has been approved.</p>
                @elseif ($approvalStatus === 'declined')
                    <p>This adoption request has been declined.</p>
                @else
                    <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#approveAdoptionModal">
                        Approve Adoption
                    </button>

                    <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#declineAdoptionModal">
                        Decline Adoption
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Approve Adoption Modal -->
<div class="modal fade" id="approveAdoptionModal" tabindex="-1" role="dialog" aria-labelledby="approveAdoptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approveAdoptionModalLabel">Approve Adoption</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to approve this adoption request?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('admins.adoption-requests.approve', ['adoptionRequest' => $adoptionRequest]) }}" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-success">Yes, Approve Adoption</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Decline Adoption Modal -->
<div class="modal fade" id="declineAdoptionModal" tabindex="-1" role="dialog" aria-labelledby="declineAdoptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="declineAdoptionModalLabel">Decline Adoption</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to decline this adoption request?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('admins.adoption-requests.decline', ['adoptionRequest' => $adoptionRequest]) }}" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-danger">Yes, Decline Adoption</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
