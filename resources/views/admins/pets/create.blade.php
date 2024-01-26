@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card custom-card bg-dark  mb-4"> <!-- Added bg-dark class for dark background -->
        <div class="card-header">
            <h1 class="text-white">Add a New Pet</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admins.pets.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="pet_name" class="text-white">Name:</label>
                    <input type="text" name="pet_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="type" class="text-white">Type:</label>
                    <select name="type" class="form-control" required>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="gender" class="text-white">Gender:</label>
                    <select name="gender" class="form-control" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="species" class="text-white">Species:</label>
                    <input type="text" name="species" class="form-control">
                </div>

                <div class="form-group">
                    <label for="age_years" class="text-white">Age (Years):</label>
                    <input type="number" name="age_years" class="form-control">
                </div>

                <div class="form-group">
                    <label for="age_months" class="text-white">Age (Months):</label>
                    <input type="number" name="age_months" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description" class="text-white">Description:</label>
                    <textarea name="description" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="up_for_adoption" class="text-white">For Adoption:</label>
                    <select name="up_for_adoption" class="form-control" required>
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="photo" class="text-white">Photo:</label>
                    <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="customFile" accept="image/jpeg, image/png, image/gif">
                        <label class="custom-file-label text-dark" for="customFile">Choose file</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Pet</button>
                <a href="{{ route('admins.pets.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
