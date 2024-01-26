@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-4" style="background-color: #FFFFFF; color: #000;border-radius: 15px; border: 2px solid #000;">
                <div class="card-header">
                    <h1 style="margin: 0; cursor: pointer;" data-toggle="modal" data-target="#accountDetailsModal">Account Details</h1>
                    <p style="margin: 0; cursor: pointer;" data-toggle="modal" data-target="#accountDetailsModal">Your personal account information.</p>
                </div>
            </div>
            @if ($user->additionalDetails)
                <div class="card mb-4" style="background-color: #FFFFFF; color: #000;border-radius: 15px; border: 2px solid #000;">
                    <div class="card-header">
                        <h1 style="margin: 0; cursor: pointer;" data-toggle="modal" data-target="#additionalDetailsModal">Additional Details</h1>
                        <p style="margin: 0; cursor: pointer;" data-toggle="modal" data-target="#additionalDetailsModal">Additional information for your account.</p>
                    </div>
                </div>
            @else
                <a href="{{ route('users.add-additional-details') }}" class="card mb-4">
                    <div class="card-header" style="background-color: #FFFFFF; color: #000; 15px; border: 2px solid #000;">
                        <h1 style="margin: 0;">Add Additional Details</h1>
                        <p style="margin: 0;">Provide additional information about yourself.</p>
                    </div>
                </a>
            @endif

            <div class="row mt-2">
                <div class="col-md-6">
                    <!--<a href="{{ route('users.user-dashboard') }}" class="btn" style="background-color: #F4C67F; color: #000;">Back</a>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Account Details Modal -->
<div class="modal fade" id="accountDetailsModal" tabindex="-1" role="dialog" aria-labelledby="accountDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="accountDetailsModalLabel">Account Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="user-details">
                    <div class="user-detail">
                        <span class="detail-label"><strong>First Name:</strong></span>
                        <span class="detail-value">{{ $user->first_name }}</span>
                    </div>

                    <div class="user-detail">
                        <span class="detail-label"><strong>Last Name:</strong></span>
                        <span class="detail-value">{{ $user->last_name }}</span>
                    </div>

                    <div class="user-detail">
                        <span class="detail-label"><strong>Birthday:</strong></span>
                        <span class="detail-value">{{ optional(\Carbon\Carbon::parse($user->birthday))->format('F d, Y') }}</span>
                    </div>

                    <div class="user-detail">
                        <span class="detail-label"><strong>Gender:</strong></span>
                        <span class="detail-value">{{ $user->gender }}</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('users.edit-account-details') }}" class="btn btn-primary">Edit Account Details</a>
                <a href="{{ route('users.change-password') }}" class="btn btn-secondary">Change Password</a>
            </div>
        </div>
    </div>
</div>

<!-- Additional Details Modal -->
<div class="modal fade" id="additionalDetailsModal" tabindex="-1" role="dialog" aria-labelledby="additionalDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="additionalDetailsModalLabel">Additional Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <dl>
                            <!-- Province -->
                            <dt>Province:</dt>
                            <dd>{{ $user->additionalDetails->province ?? 'N/A' }}</dd>

                            <!-- City -->
                            <dt>City:</dt>
                            <dd>{{ $user->additionalDetails->city ?? 'N/A' }}</dd>

                            <!-- Street -->
                            <dt>Street:</dt>
                            <dd>{{ $user->additionalDetails->street ?? 'N/A' }}</dd>

                            <!-- Postal Code -->
                            <dt>Postal Code:</dt>
                            <dd>{{ $user->additionalDetails->postal_code ?? 'N/A' }}</dd>

                            <!-- Citizenship -->
                            <dt>Citizenship:</dt>
                            <dd>{{ $user->additionalDetails->citizenship ?? 'N/A' }}</dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <dl>
                            <!-- Occupation -->
                            <dt>Occupation:</dt>
                            <dd>{{ $user->additionalDetails->occupation ?? 'N/A' }}</dd>

                            <!-- Spouse -->
                            <dt>Spouse:</dt>
                            <dd>{{ $user->additionalDetails->spouse ?? 'N/A' }}</dd>

                            <!-- Children Names -->
                            <dt>Children Names:</dt>
                            <dd>{{ $user->additionalDetails->children_names ?? 'N/A' }}</dd>

                            <!-- Current Household Pets -->
                            <dt>Current Household Pets:</dt>
                            <dd>{{ $user->additionalDetails->current_household_pets ?? 'N/A' }}</dd>

                          <!-- Visit Veterinarian -->
                          <dl>
                            <dt>Do your Pet/s get checked?</dt>
                            <dd>{{ optional($user->additionalDetails)->visit_veterinarian ? 'Yes' : 'No' ?? 'N/A' }}</dd>
                        </dl>
                    </div>
                </div>
                <div class="text-center mt-3">
                    @if ($user->additionalDetails && $user->additionalDetails->valid_id)
                    <a href="{{ asset('storage/' . $user->additionalDetails->valid_id) }}" target="_blank">
                        <img src="{{ asset('storage/' . $user->additionalDetails->valid_id) }}" class="img-fluid" style="max-width: 200px;" alt="Valid ID">
                    </a>
                    @else
                    <p class="mt-2">No Valid ID available.</p>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('users.edit-additional-details') }}" class="btn btn-primary">Change Additional Details</a>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .input-container {
        margin-bottom: 10px;
    }
</style>

<script>
    $(document).ready(function() {
        // Handle the "View Valid ID" button click
        var viewed = false;
        $('#viewValidIdButton').click(function() {
            if (viewed) {
                $('#validIdImage').attr('src', '');
                $('#viewValidIdButton').text('View Valid ID');
                viewed = false;
            } else {
                @if ($user->additionalDetails)
                    var validIdImageSrc = "{{ Storage::url($user->additionalDetails->valid_id) }}";
                @else
                    var validIdImageSrc = ''; // No additional details, set src to empty
                @endif
                $('#validIdImage').attr('src', validIdImageSrc);
                $('#viewValidIdButton').text('Hide Valid ID');
                viewed = true;
            }
        });
    });
</script>
@endsection
