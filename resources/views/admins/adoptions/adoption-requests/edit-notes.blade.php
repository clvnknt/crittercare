@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Edit Notes
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admins.adoption-requests.update-notes', ['adoptionRequest' => $adoptionRequest->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="notes">Notes:</label>
                    <textarea id="notes" name="notes" class="form-control" rows="4">{{ old('notes', $adoptionRequest->notes) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
