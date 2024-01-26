@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pet Breed</h1>
        <form action="{{ route('admin.pet-breeds.update', $breed->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Breed Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $breed->name }}" required>
            </div>
            <div class="form-group">
                <label for="type">Breed Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="dog" {{ $breed->type === 'dog' ? 'selected' : '' }}>Dog</option>
                    <option value="cat" {{ $breed->type === 'cat' ? 'selected' : '' }}>Cat</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Breed</button>
        </form>
    </div>
@endsection
