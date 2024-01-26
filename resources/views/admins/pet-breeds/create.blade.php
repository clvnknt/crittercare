@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Pet Breed</h1>
        <form action="{{ route('admin.pet-breeds.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Breed Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Breed Type</label>
                <select name="type" id="type" class="form-control" required>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Breed</button>
        </form>
    </div>
@endsection
