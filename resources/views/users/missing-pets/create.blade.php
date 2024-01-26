@extends('layouts.app')

@section('content')
<div class="card custom-card text-black mb-4">
    <div class="card-body">
        <h1 class="display-4">Report Missing Pet</h1>
        <p>Help us find your missing pet by providing the details below.</p>

        <hr> <!-- Added horizontal line below the paragraph -->

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('users.missing-pets.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <!-- Pet Name Input -->
                    <div class="mb-3">
                        <label for="pet_name" class="form-label">Pet Name</label>
                        <input type="text" name="pet_name" class="form-control" placeholder="Enter Pet Name" required>
                    </div>

                    <!-- Gender Select Dropdown -->
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" class="form-select form-control" required>
                            <option value="" disabled selected hidden>Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <!-- Type Select Dropdown -->
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-select form-control" required>
                            <option value="" disabled selected hidden>Choose Type</option>
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                        </select>
                    </div>

                    <!-- Species Input -->
                    <div class="mb-3">
                        <label for="species" class="form-label">Species (e.g., Shiba Inu, Aspin, etc.)</label>
                        <input type="text" name="species" class="form-control" placeholder="Enter Species" required>
                    </div>

                    <!-- Age (Years) Input -->
                    <div class="mb-3">
                        <label for="age_years" class="form-label">Age (Years)</label>
                        <input type="number" name="age_years" class="form-control" min="0" max="99" placeholder="Enter Age in Years" required>
                    </div>

                    <!-- Age (Months) Input -->
                    <div class="mb-3">
                        <label for="age_months" class="form-label">Age (Months)</label>
                        <input type="number" name="age_months" class="form-control" min="0" max="12" placeholder="Enter Age in Months" required>
                    </div>

                    <!-- Missing Since Input -->
                    <div class="mb-3">
                        <label for="missing_since" class="form-label">Missing Since</label>
                        <input type="date" name="missing_since" class="form-control datepicker" placeholder="Select Missing Since Date" required max="{{ date('Y-m-d') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Pictures Input -->
                    <div class="mb-3">
                        <label for="pictures" class="form-label">Upload Missing Pet Picture</label>
                        <input type="file" name="pictures" class="form-control" accept="image/*" placeholder="Select Picture">
                    </div>

                    <!-- Notable Features Input -->
                    <div class="mb-3">
                        <label for="notable_features" class="form-label">Notable Features</label>
                        <input type="text" name="notable_features" class="form-control" placeholder="Enter Notable Features" required>
                    </div>

                    <!-- Last Seen Location Input -->
                    <div class="mb-3">
                        <label for="last_seen_location" class="form-label">Last Seen Location</label>
                        <input type="text" name="last_seen_location" class="form-control" placeholder="Enter Last Seen Location" required>
                    </div>

                    <!-- Contact Social Media Input -->
                    <div class="mb-3">
                        <label for="contact_social_media" class="form-label">Pet Owner's Social Media</label>
                        <input type="text" name="contact_social_media" class="form-control" placeholder="Enter Social Media Information" required>
                    </div>

                    <!-- Contact Phone Input -->
<div class="mb-3">
    <label for="contact_phone" class="form-label">Pet Owner's Phone</label>
    <input type="tel" name="contact_phone" class="form-control" pattern="[0-9]*" inputmode="numeric" title="Please enter only numbers" placeholder="Enter Phone Number" minlength="11" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
</div>


                    <!-- Contact Email Input -->
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Pet Owner's Email</label>
                        <input type="email" name="contact_email" class="form-control" placeholder="Enter Email" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Description Textarea -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Enter Description" required></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-3"> <!-- Adjusted the button placement and added margin-top -->
<a href="{{ route('users.missing-pets') }}" class="btn btn-danger me-2">Cancel</a> <!-- Back button with margin-right -->
    <div style="width: 10px;"></div> <!-- Added a div with width to create space between buttons -->
    <button type="submit" class="text-white btn" style="background-color: #61A3BA;">Submit Report</button> <!-- Submit button -->
</div>


        </form>
    </div>
</div>

<style>
    .dark-bg {
        background-color: #333;
        color: #fff;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .form-control,
    .form-select {
        background-color: #fff;
        color: #000;
    }

    .custom-card {
        background-color: #F0B775;
        color: #000;
    }
</style>

<!-- Include Bootstrap Datepicker library -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
        });
    });
</script>
@endsection
