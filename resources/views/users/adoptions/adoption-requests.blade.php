@extends('layouts.app')

@section('content')
<div class="container">
    <!--<a href="{{ route('users.available-pets.index') }}" class="btn btn-secondary" style="background-color: #F4C67F; color: #000;">Back</a>-->
    <div class="text-center mt-3 white-bg rounded-lg p-4" style="background-color: #FFF8EA;">
        <h1 class="display-4 text-black font-weight-bold">Adoption Requests</h1>
        <p class="text-black">Explore adoption requests for our lovely pets. See the details of each request and take action accordingly.</p>
    </div>

    <div class="mt-4 white-container" style="background-color: #FFF8EA; padding: 20px;">
        @if ($adoptionRequests->isEmpty())
            <p class="text-center">No adoption requests have been made.</p>
        @else
            <div class="row">
                @foreach ($adoptionRequests as $adoptionRequest)
                    <div class="col-md-3 mb-4">
                        <a href="{{ route('users.adoptions.view', $adoptionRequest->id) }}" class="card-link">
                            <div class="card custom-card text-center">
                                <div class="dark-card">
                                    @if ($adoptionRequest->pet->photo)
                                        <img src="{{ asset('storage/media/adoption/' . $adoptionRequest->pet->photo) }}" alt="Pet Photo" class="card-img-top dark-img">
                                    @else
                                        @if ($adoptionRequest->pet->type === 'Dog')
                                            <img src="{{ asset('icons/no-pic-dog.png') }}" alt="No Dog Image Available" class="card-img-top dark-img">
                                        @elseif ($adoptionRequest->pet->type === 'Cat')
                                            <img src="{{ asset('icons/no-pic-cat.png') }}" alt="No Cat Image Available" class="card-img-top dark-img">
                                        @endif
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title custom-card-title">{{ $adoptionRequest->pet->pet_name }}</h5>
                                    <p class="card-text custom-card-text">{{ $adoptionRequest->adoptionStatus->status }}</p>
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
    .dark-card {
        background-color: #333;
        padding: 5px;
        border-radius: 8px;
    }

    .dark-img {
        background-color: #333;
        border-radius: 8px;
    }

    .white-container {
        background-color: #FFF8EA;
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
        background-color: #F4C67F;
        border-radius: 8px;
        padding: 20px;
    }
</style>
@endsection
