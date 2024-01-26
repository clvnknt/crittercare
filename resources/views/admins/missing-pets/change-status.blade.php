@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Update Missing Pet Status</h1>

    <div class="card">
        <div class="card-header">
            {{ $missingPet->pet_name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Type: {{ $missingPet->type }}</h5>
            <!-- Display other missing pet details here -->
            
            <form method="POST" action="{{ route('admins.missing-pets.update-status', ['missingPet' => $missingPet]) }}">
                @csrf
                <div class="form-group">
                    <label for="status">Update Status:</label>
                    <select name="status" class="form-control">
                        <option value="pending" @if ($missingPet->status === 'pending') selected @endif>Pending</option>
                        <option value="open" @if ($missingPet->status === 'open') selected @endif>Open</option>
                        <option value="solved" @if ($missingPet->status === 'solved') selected @endif>Solved</option>
                        <option value="cancelled" @if ($missingPet->status === 'cancelled') selected @endif>Cancelled</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Status</button>
            </form>
        </div>
    </div>
</div>
@endsection
