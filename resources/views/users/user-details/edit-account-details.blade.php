@extends('layouts.app')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card custom-card bg-white">
            <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #435585; color: white; text-shadow: 0 0 0.8px black;">
                        <h1>Change Account Details</h1>
                    </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form id="accountDetailsForm" method="POST" action="{{ route('users.update-account-details') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $user->first_name) }}" required>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $user->last_name) }}" required>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $user->username) }}" required>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" required placeholder="Enter your phone number (e.g., 09123456789)" pattern="09\d{9}" inputmode="numeric" maxlength="11">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="birthday">Birthday DD/MM/YYYY</label>
                                    <input type="date" id="birthday" name="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday', $user->birthday) }}">
                                    @error('birthday')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">Current Gender: {{ old('gender', $user->gender) }}</label>
                                    <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                        @if($user->gender !== 'male')
                                        <option value="Male">Switch to Male</option>
                                        @endif
                                         @if($user->gender !== 'female')
                                         <option value="Female">Switch to Female</option>
                                         @endif
                                         @if($user->gender !== 'other')
                                         <option value="Other">Switch to Other</option>
                                         @endif
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                         @enderror
                                        </div>
                                    </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">Save Changes</button>
                        <a href="#" class="btn btn-secondary" onclick="return confirmDiscardChanges()">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Changes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to save the changes? Any unsaved changes will be discarded.
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="document.getElementById('accountDetailsForm').submit()">Yes, Save Changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
            </div>
        </div>
    </div>
</div>

<!-- Discard Changes Modal -->
<div class="modal fade" id="discardChangesModal" tabindex="-1" role="dialog" aria-labelledby="discardChangesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="discardChangesModalLabel">Discard Changes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to go back? Any unsaved changes will be discarded.
            </div>
            <div class="modal-footer">
                <a href="{{ route('users.account-settings') }}" class="btn btn-primary">Yes, Discard Changes</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Stay Here</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDiscardChanges() {
        $('#discardChangesModal').modal('show');
        return false; // Prevent the default link behavior
    }
</script>

@endsection
