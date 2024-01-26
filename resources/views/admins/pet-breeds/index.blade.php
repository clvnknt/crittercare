@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pet Breeds</h1>
        <a href="{{ route('admin.pet-breeds.create') }}" class="btn btn-primary">Add New Breed</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($breeds as $breed)
                    <tr>
                        <td>{{ $breed->id }}</td>
                        <td>{{ $breed->name }}</td>
                        <td>
                            <a href="{{ route('admin.pet-breeds.edit', $breed->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <form method="POST" action="{{ route('admin.pet-breeds.delete', $breed->id) }}" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this pet breed?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
