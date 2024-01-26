@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adoption Requests</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pet Name</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adoptions as $adoption)
                    <tr>
                        <td>{{ $adoption->id }}</td>
                        <td>{{ $adoption->pet->name }}</td>
                        <td>{{ $adoption->user->first_name }} {{ $adoption->user->last_name }}</td>
                        <td>{{ ucfirst($adoption->status) }}</td>
                        <td>
                            <a href="{{ route('admins.adoptions.view', $adoption->id) }}" class="btn btn-primary">View</a>
                            @if ($adoption->status === 'pending')
                                <form method="POST" action="{{ route('admins.adoptions.approve', $adoption->id) }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                                <form method="POST" action="{{ route('admins.adoptions.decline', $adoption->id) }}" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Decline</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
