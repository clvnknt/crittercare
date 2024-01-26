@extends('layouts.app')

@section('content')
<div class="container">
    <!--<a href="{{ route('users.available-pets.index') }}" class="btn btn-secondary mt-3 ml-1" style="background-color: #F4C67F; color: #000;">Back</a>-->
    <div class="text-center mt-3 dark-bg rounded-lg p-4" style="background-color: #FFF8EA;">
    <h1 class="display-4 font-weight-bold text-black">Adopted Pets</h1>
    <p class="text-black">Explore your adopted pets.</p>
    </div>

    <div class="mt-4 white-bg rounded p-4" style="background-color: #FFF8EA;">
        @if ($adoptedPets->isEmpty())
            <p class="text-center">No adopted pets found. Adopt one now!</p>
        @else
            <div class="row">
                @foreach ($adoptedPets as $pet)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('users.adoptions.view', $pet->id) }}" class="card-link">
                            <div class="card custom-card text-center">
                                <div class="dark-card">
                                    @if ($pet->photo)
                                        <img src="{{ asset('storage/images/' . $pet->photo) }}" alt="{{ $pet->pet_name }}" class="card-img-top dark-img">
                                    @else
                                        @if ($pet->type === 'Dog')
                                            <img src="{{ asset('icons/no-pic-dog.png') }}" alt="No Dog Image Available" class="card-img-top dark-img">
                                        @elseif ($pet->type === 'Cat')
                                            <img src="{{ asset('icons/no-pic-cat.png') }}" alt="No Cat Image Available" class="card-img-top dark-img">
                                        @endif
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title custom-card-title">{{ $pet->pet_name }}</h5>
                                    <!-- Additional pet information can be added here -->
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

<style>
    .dark-bg {
        background-color: #333;
        border-radius: 8px;
        padding: 20px;
    }

    .dark-card {
        background-color: #333;
        padding: 5px;
        border-radius: 8px;
    }

    .dark-img {
        background-color: #333;
        border-radius: 8px;
    }

    .custom-card {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .custom-card-title {
        color: #333;
    }

    .custom-card-text {
        color: #333;
    }

    .white-bg {
        background-color: #FFF8EA;
    }
</style>
@endsection