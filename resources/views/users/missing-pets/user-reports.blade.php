@extends('layouts.app')

@section('content')
<div class="container">
    <!--<a href="{{ route('users.available-pets.index') }}" class="btn" style="background-color: #F4C67F; color: #000;">Back</a>-->
    <div class="text-center mt-3 white-bg rounded-lg p-4" style="background-color: #FFF8EA;">
        <h1 class="display-4 text-black font-weight-bold">Missing Pets</h1>
        <p class="text-black">Explore your missing pet reports.</p>
    </div>

    <div class="mt-4 white-container rounded-lg p-4" style="background-color: #FFF8EA;">
        @if ($userReports->isEmpty())
            <p class="text-center">No missing pet reports have been made.</p>
        @else
            <div class="row">
                @foreach ($userReports as $report)
                    <div class="col-md-3 mb-4">
                        <a href="{{ route('users.missing-pets.show', ['missingPet' => $report]) }}" class="card-link">
                            <div class="card custom-card text-center">
                                <div class="dark-card">
                                    @if ($report->pictures)
                                        <img src="{{ asset('storage/' . $report->pictures) }}" alt="{{ $report->pet_name }} Image" class="card-img-top dark-img">
                                    @else
                                        @if ($report->type === 'Dog')
                                            <img src="{{ asset('site-icons/no-pic-dog.png') }}" alt="No Dog Image Available" class="card-img-top dark-img">
                                        @elseif ($report->type === 'Cat')
                                            <img src="{{ asset('site-icons/no-pic-cat.png') }}" alt="No Cat Image Available" class="card-img-top dark-img">
                                        @endif
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title custom-card-title">{{ $report->pet_name }}</h5>
                                    <p class="card-text custom-card-text">{{ $report->status }}</p>
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
