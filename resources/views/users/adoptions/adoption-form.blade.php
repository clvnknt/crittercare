@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-3">
        <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #435585; color: white; text-shadow: 0 0 0.8px black;">
            <h1 class="text-black">Adoption Form for {{ $pet->pet_name }}</h1>
        </div>
        <div class="card-body">
            <p class="mb-4">
                Fill out the adoption form below to request adopting {{ $pet->pet_name }}. Provide your reasons for adoption and any additional information as needed.
            </p>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('users.pets.submit-adopt', $pet->id) }}" id="adoptionForm">
                @csrf

                <div class="form-group">
                    <label for="reason" class="text-black">Reason for Adoption</label>
                    <textarea name="reason" id="reason" class="form-control" rows="5" required>{{ old('reason') }}</textarea>
                </div>

                <div class="mt-3" style="text-align: right;">
                    <button type="button" class="btn btn-custom btn-block rounded-pill  mb-2" style="background-color: #F4C67F; color: black;" onclick="validateAndSubmit()">Submit Adoption Request</button>
                    
                    <button type="button" class="btn btn-custom btn-block rounded-pill" data-toggle="modal" data-target="#cancelModal">Cancel</button>                    
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Cancel Modal -->
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelModalLabel">Cancel Adoption Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to cancel your adoption request for {{ $pet->pet_name }}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a href="{{ route('users.available-pets.view', ['pet' => $pet->id]) }}" class="btn btn-danger">Yes, Cancel</a>
            </div>
        </div>
    </div>
</div>

<!-- Submit Modal -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitModalLabel">Submit Adoption Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to submit your adoption request for {{ $pet->pet_name }}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn" style="background-color: #F4C67F; color: black;" onclick="submitForm()">Yes, Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Reason Modal -->
<div class="modal fade" id="reasonModal" tabindex="-1" role="dialog" aria-labelledby="reasonModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reasonModalLabel">Reason Required</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Please provide a reason for adoption.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<script>
    function validateAndSubmit() {
        var reason = document.getElementById('reason').value;
        if (reason.trim() !== '') {
            $('#submitModal').modal('show');
        } else {
            $('#reasonModal').modal('show');
        }
    }

    function submitForm() {
        document.getElementById('adoptionForm').submit();
    }
</script>

@endsection
