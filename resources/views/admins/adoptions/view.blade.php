@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Adoption Request Details</h1>
            </div>
            <div class="card-body">
                <p><strong>Username:</strong> {{ $adoption->user->username }}</p>
                <p><strong>First Name:</strong> {{ $adoption->user->first_name }}</p>
                <p><strong>Last Name:</strong> {{ $adoption->user->last_name }}</p>
                <p><strong>Email:</strong> {{ $adoption->user->email }}</p>
                <hr>
                <p><strong>Pet:</strong> {{ $adoption->pet->name }}</p>
                <p><strong>Status:</strong> {{ $adoption->status }}</p>
                <hr>
                <p><strong>Additional Information:</strong></p>
                <p>{{ $adoption->additional_info }}</p>

                @if ($adoption->status === 'pending')
                    <!-- Form to approve or decline the adoption request -->
                    <div class="form-group">
                        <form method="POST" action="{{ route('admins.adoptions.approve', $adoption->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </div>

                    <div class="form-group">
                        <form method="POST" action="{{ route('admins.adoptions.decline', $adoption->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Decline</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
