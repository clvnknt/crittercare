@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card bg-dark text-white">
                <div class="card-header">
                    <h1 class="text-center">Pet Details</h1>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        @if($pet->photo)
                        <img src="{{ asset('storage/media/adoption/' . $pet->photo) }}" alt="{{ $pet->pet_name }} Image">
                        @else
                            @if ($pet->type === 'Dog')
                                <img src="{{ asset('icons/no-pic-dog.png') }}" alt="No Pet Photo" class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
                            @elseif ($pet->type === 'Cat')
                                <img src="{{ asset('icons/no-pic-cat.png') }}" alt="No Pet Photo" class="img-fluid rounded-circle mb-3" style="max-width: 200px;">
                            @endif
                        @endif
                    </div>
                    <h5 class="card-title text-center">{{ $pet->pet_name }}</h5>
                    <div class="text-center">
                        <div class="text-box">
                            <p><strong>Type:</strong> {{ $pet->type }}</p>
                        </div>
                        <div class="text-box">
                            <p><strong>Species:</strong> {{ $pet->species }}</p>
                        </div>
                        <div class="text-box">
                            <p><strong>Age:</strong>
                                @if ($pet->age_years)
                                    {{ $pet->age_years }} years
                                @endif
                                @if ($pet->age_months)
                                    {{ $pet->age_months }} months
                                @endif
                            </p>
                        </div>
                        <div class="text-box">
                            <p><strong>Description:</strong> {{ $pet->description }}</p>
                        </div>
                        <div class="text-box">
                            <p><strong>For Adoption:</strong> {{ $pet->up_for_adoption }}</p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="text-box">
                                <p><strong>Created At:</strong> {{ $pet->created_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-box">
                                <p><strong>Updated At:</strong> {{ $pet->updated_at->format('F j, Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('admins.pets.edit', $pet->id) }}" class="btn btn-primary">Edit Pet Details</a>
                    <form method="POST" action="{{ route('admins.pets.delete', $pet->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this pet?')">Remove</button>
                    </form>
                    <a href="{{ route('admins.pets.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection