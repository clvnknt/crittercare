@extends('layouts.app')

@section('content')
<div class="miss-container">
    <!-- Banner Section -->
    <div class="text-center p-4">
        <div class="img-logo">
            <img src="{{ asset('site-icons/user/find-pet.png') }}" class="img-fluid" alt="Missing Pets Banner">
        </div>
        <h1 class="display-4">Missing Pets</h1>
        <p class="text-black">Browse and report missing pets.</p>
        <a href="{{ route('users.missing-pets.create') }}" class="btn mt-3 ml-3" style="background-color: #F4C67F;   border-color: #E27802; color: #000;">Report Missing Pet</a>
        <a href="{{ route('users.missing-pets.own-reports') }}" class="btn mt-3 ml-3" style="background-color: #BBF1FA; border-color: #FBFBFB; color: #000;">View Your Reports</a>
    </div>
    
    <!-- Filter Section -->
    <div class="text-left mb-3">
        <form action="{{ route('users.missing-pets') }}" method="get">
            <label for="sort" class="form-label">Sort:</label>
            <select name="sort" id="sort" class="form-select" onchange="this.form.submit()" style="width: 100px;">
                <option value="oldest" {{ $sort === 'oldest' ? 'selected' : '' }}>Longest</option>
                <option value="longest" {{ $sort === 'longest' ? 'selected' : '' }}>Earliest</option>
            </select>
        </form>
    </div>

    <!-- Missing Pets Section -->
    <div class="row mt-3 pet-container">
        @forelse ($missingPets as $missingPet)
            <div class="col-md-3 mb-4 pet-card {{ strtolower($missingPet->type) }}">
                <a href="{{ route('users.missing-pets.show', ['missingPet' => $missingPet]) }}" class="card-link">
                    <div class="card custom-card">
                        <div class="dark-img-container">
                            @php
                                $imageSrc = $missingPet->pictures ? asset('storage/' . $missingPet->pictures) : ($missingPet->type === 'Dog' ? asset('site-icons/no-pic-dog.png') : asset('site-icons/no-pic-cat.png'));
                            @endphp
                            <img src="{{ $imageSrc }}" class="card-img-top" alt="{{ $missingPet->pet_name }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center no-link">{{ $missingPet->pet_name }}</h5>
                            <div class="status-container text-center">
                                <strong style="color: red; text-align: center;">Missing Since<br></strong>
                                <span style="color: black; text-align: center;">
                                    {{ \Carbon\Carbon::parse($missingPet->missing_since)->format('F j, Y') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <!-- Display a message when there are no missing pets -->
            <div class="col-md-12 text-center">
                <p>No missing pets found.</p>
            </div>
        @endforelse
    </div>

    <!-- Custom Pagination Section (Centered) -->
    <div class="row mt-3">
        <div class="col-md-12 text-center">
            <ul class="pagination justify-content-center">
                @if ($missingPets->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $missingPets->appends(['filter' => $filter, 'sort' => $sort])->previousPageUrl() }}" rel="prev">Previous</a></li>
                @endif

                @for ($i = 1; $i <= $missingPets->lastPage(); $i++)
                    <li class="page-item {{ $i == $missingPets->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $missingPets->appends(['filter' => $filter, 'sort' => $sort])->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($missingPets->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $missingPets->appends(['filter' => $filter, 'sort' => $sort])->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                @endif
            </ul>
        </div>
    </div>
    <div class="col-md-12 text-center">
    <p>Page {{ $missingPets->currentPage() }} out of {{ $missingPets->lastPage() }}</p>
</div>
</div>

<style>
.miss-container {
        background-color: #FFC7EA;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
        padding: 45px;
        border-radius: 30px;
        padding-top: 10px;
    }

    @media (max-width: 767px) {
        .miss-container {
            padding: 20px; /* Adjust the padding for mobile screens */
        }

        .pet-container {
        padding: 5px; /* Adjust padding for top spacing */
        border-radius: 5px;
    }

    .pet-card {
        padding: 5px;
    }
    }

    /* Remove underline and set text color for links */
    .no-link {
        color: #333;
        text-decoration: none;
    }
    .pet-container {
        background-color: #CAEDFF;
        padding: 30px; /* Adjust padding for top spacing */
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Styling for the pet card */
    .pet-card {
        display: flex;
        flex-direction: column;
        padding: 15px;
        border-radius: 8px;
        
    }
    
    .pet-card:hover {
        border-radius: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-6px);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    /* Styling for the dark image container */
    .dark-img-container {
        background-color: #333; /* Dark background */
        border-radius: 10px;
        padding: 10px;
    }

    /* Styling for the card image */
    .card-img-top {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    /* Styling for the status container */
    .status-container {
        padding: 10px;
        font-weight: bold;
        border-radius: 8px;
        margin-top: 10px;
    }

    /* Styling for the "missing since" status */
    .missing-since {
        background-color: red;
    }

    .img-logo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 0 auto;
        align-items: center;
        justify-content: center;
    }
</style>

@endsection
