@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Add Notes</div>
        <div class="card-body">
            <form action="{{ route('admins.adoption-requests.add-notes', ['adoptionRequest' => $adoptionRequest->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="notes">Notes:</label>
                    <textarea id="notes" name="notes" class="form-control" rows="4" required>{{ old('notes') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Notes</button>
            </form>
        </div>
    </div>
</div>
@endsection