@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mt-5 dark-bg rounded-lg p-4">
        <h1 class="display-4 text-white font-weight-bold">Pet Surrender Form</h1>
        <p class="text-white">Please provide details about the pet you wish to surrender.</p>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card custom-card">
                <div class="card-body">
                    <form method="POST" action="{{ route('pet-surrender.submit') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="pet_name" class="text-white">Pet Name</label>
                            <input id="pet_name" type="text" class="form-control" name="pet_name" value="{{ old('pet_name') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="type" class="text-white">Type</label>
                            <select id="type" class="form-control" name="type" required>
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="species" class="text-white">Species</label>
                            <input id="species" type="text" class="form-control" name="species" value="{{ old('species') }}">
                        </div>

                        <div class="form-group">
                            <label for="age_years" class="text-white">Age (Years)</label>
                            <input id="age_years" type="number" class="form-control" name="age_years" value="{{ old('age_years') }}">
                        </div>

                        <div class="form-group">
                            <label for="age_months" class="text-white">Age (Months)</label>
                            <input id="age_months" type="number" class="form-control" name="age_months" value="{{ old('age_months') }}">
                        </div>

                        <div class="form-group">
                            <label for="reason" class="text-white">Reason for Surrender</label>
                            <textarea id="reason" class="form-control" name="reason" rows="4">{{ old('reason') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="text-white">Pet Photo</label>
                            <input id="photo" type="file" class="form-control-file" name="photo">
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-card {
        background-color: #333;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        margin-bottom: 20px; /* Add margin to the card's bottom */
    }

    .dark-bg {
        background-color: #333;
        border-radius: 8px;
        padding: 20px;
    }

    .text-white {
        color: #fff;
    }
</style>
</div>
@endsection
