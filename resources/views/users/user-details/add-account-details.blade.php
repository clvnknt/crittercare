@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Add Additional User Details</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form method="POST" action="{{ route('users.store-additional-details') }}">
                @csrf
                <div class="form-group">
                    <label for="region">Region:</label>
                    <input type="text" name="region" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="province">Province:</label>
                    <input type="text" name="province" class="form-control" required>
                </div>
                <!-- Add more form fields for additional details here -->
                <!-- Example: -->
                <!-- <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" name="city" class="form-control" required>
                </div> -->
                <button type="submit" class="btn btn-primary">Save Additional Details</button>
            </form>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('users.account-settings') }}" class="btn btn-secondary">Back to Account Settings</a>
    </div>
</div>
@endsection
