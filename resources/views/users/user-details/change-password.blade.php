@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card bg-white">
        <div class="card-header">
            <h1>Change Password</h1>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('users.change-password') }}">
                @csrf

                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input id="current_password" type="password" class="form-control" name="current_password" required>
                </div>

                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input id="new_password" type="password" class="form-control" name="new_password" required>
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">Confirm Password</label>
                    <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                    <a href="{{ route('users.account-settings') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
