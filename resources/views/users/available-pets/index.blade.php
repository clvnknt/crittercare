@extends('layouts.app')

@section('content')
<style>
    .white-bg {
        background-color: #AED8CC;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        padding: 45px;
        border-radius: 30px;
    }

    .no-link {
        color: #000;
        text-decoration: none;
    }

    .custom-card {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
    }

    
    .img-container img {
        width: 300px;
        height: 300px;
        justify-content: center;
        margin: 0 auto;
    }

    .pet-container {
        background-color: #FFF8EA;
        padding: 20px; /* Adjust padding for top spacing */
        border-radius: 40px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    }

    /* Dark background container */
    .dark-img-container {
        background-color: #333;
        padding: 5px;
        border-radius: 8px;
    }

    .filter-button {
        display: none;
    }


    .no-link {
        color: #000;
        text-decoration: none;
    }

    .custom-card {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 8px;
    }

    .custom-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    @media (max-width: 767px) {
        .pet-container {
            padding: 12px; /* Adjust padding for mobile screens */
            border-radius: 25px; /* Adjust border radius for smaller corners on mobile */
        }

        .pet-card {
            padding: 15px; /* Increase padding for larger cards on mobile screens */
        }
    }    
</style>

<div class="white-bg p-4 mt-4"> <!-- Adjust top margin and padding -->
<div class="text-center rounded-lg p-4">
    <div class="img-container">
        <img src="{{ asset('site-icons/user/cat.png') }}" alt="Adoption Banner">
    </div>  
    <h1 class="display-4 mt-1">Available Pets for Adoption</h1>
    <p class="text-black">Explore our lovely pets who are looking for a new home. Choose your new furry friend and start the adoption process today!</p>
    
    <div class="text-center"> <!-- Center-align the buttons -->
        <a href="{{ route('users.adoption-requests') }}" class="btn btn-secondary mt-3 ml-3" style="background-color: #FFC069; border-color: #E27802; color: #000;">View Your Adoption Requests</a>
        <a href="{{ route('users.adopted-pets') }}" class="btn btn-secondary mt-3 ml-3" style="background-color: #BBF1FA; border-color: #FBFBFB; color: #000;">View Adopted Pets</a>
    </div>

    <form id="filter-form" method="GET" action="{{ route('users.available-pets.index') }}">
    <div class="row">
        <div class="col-md-4">
            <div class="d-flex align-items-center mt-2">
                <div class="form-group mr-2" style="flex: 1;text-align: left;">
                    <label for="pet-filter" class="text-black">Filter by:</label>
                    <select id="pet-filter" name="pet-filter" class="form-control" style="flex: 1;" onchange="this.form.submit()">
                        <option value="all" {{ $selectedType === 'all' ? 'selected' : '' }}>All Pets</option>
                        <option value="dog" {{ $selectedType === 'dog' ? 'selected' : '' }}>Dogs</option>
                        <option value="cat" {{ $selectedType === 'cat' ? 'selected' : '' }}>Cats</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>




    <div class="row mt-2">
        <div class="col-md-4">
            <div id="filter-result" class="text-black">
                @if ($selectedType === 'all')
                    Currently showing results for: All Pets
                @elseif ($selectedType === 'dog')
                    Currently showing results for: Dogs
                @elseif ($selectedType === 'cat')
                    Currently showing results for: Cats
                @endif
            </div>
        </div>
    </div>

    @if ($availablePets->isEmpty())
        <div class="col-md-12">
            <p class="text-center">No pets are currently available for adoption.</p>
        </div>
    @else
        <div class="col-md-12 pet-container">
            <div class="row">
                @foreach ($availablePets as $pet)
                    <div class="col-md-3 mb-4 pet-card {{ strtolower($pet->type) }}">
                        <a href="{{ route('users.available-pets.view', $pet->id) }}" class="card-link">
                            <div class="card custom-card">
                                <div class="dark-img-container">
                                    @if ($pet->photo)
                                        <img src="{{ asset('storage/media/adoption/' . $pet->photo) }}" class="card-img-top rounded" alt="{{ $pet->pet_name }}'s Photo">
                                    @else
                                        @if ($pet->type === 'Dog')
                                            <img src="{{ asset('site-icons/no-pic-dog.png') }}" class="card-img-top rounded smaller-icon" alt="No Dog Image Available">
                                        @elseif ($pet->type === 'Cat')
                                            <img src="{{ asset('site-icons/no-pic-cat.png') }}" class="card-img-top rounded smaller-icon" alt="No Cat Image Available">
                                        @else
                                            <img src="{{ asset('site-icons/no-pic-default.png') }}" class="card-img-top rounded smaller-icon" alt="Default Image">
                                        @endif
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center no-link">{{ $pet->pet_name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <br>
    <div class="row mt-3">
    <div class="col-md-12 text-center">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="{{ $availablePets->appends(['pet-filter' => $selectedType])->url(1) }}">First</a>
            </li>

            @php
                $start = max(1, $availablePets->currentPage() - 1);
                $end = min($availablePets->lastPage(), $start + 4);
            @endphp

            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $availablePets->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $availablePets->appends(['pet-filter' => $selectedType])->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <li class="page-item">
                <a class="page-link" href="{{ $availablePets->appends(['pet-filter' => $selectedType])->url($availablePets->lastPage()) }}">Last</a>
            </li>
        </ul>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12 text-center">
        <p>Page {{ $availablePets->currentPage() }} out of {{ $availablePets->lastPage() }}</p>
    </div>
</div>




</div>
</div>

@endsection
