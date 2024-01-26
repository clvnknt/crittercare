@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card bg-dark text-white">
                <div class="card-header">
                    <h1 class="text-center">Edit Pet Details</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admins.pets.update', $pet->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="pet_name">Pet Name</label>
                            <input type="text" name="pet_name" class="form-control" required value="{{ $pet->pet_name }}">
                        </div>

                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select name="type" class="form-control" required>
                                <option value="Dog" {{ $pet->type === 'Dog' ? 'selected' : '' }}>Dog</option>
                                <option value="Cat" {{ $pet->type === 'Cat' ? 'selected' : '' }}>Cat</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control" required>
                                <option value="Male" {{ $pet->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $pet->gender === 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="species">Species</label>
                            <input type="text" name="species" class="form-control" value="{{ $pet->species }}">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="age_years">Age (Years)</label>
                                <input type="number" name="age_years" class="form-control" required value="{{ $pet->age_years }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age_months">Age (Months)</label>
                                <input type="number" name="age_months" class="form-control" required value="{{ $pet->age_months }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3" required>{{ $pet->description }}</textarea>
                        </div>

                        @if ($pet->up_for_adoption !== 'Processing' && $pet->up_for_adoption !== 'Adopted')
                            <div class="form-group">
                                <label for="up_for_adoption">For Adoption:</label>
                                <select name="up_for_adoption" class="form-control">
                                    <option value="No" {{ $pet->up_for_adoption === 'No' ? 'selected' : '' }}>No</option>
                                    <option value="Yes" {{ $pet->up_for_adoption === 'Yes' ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" class="form-control-file">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update Pet</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-2 text-right"> <!-- Adjust the margin-top value as needed -->
                <a href="{{ route('admins.pets.index') }}" class="btn btn-secondary">Back</a>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection
