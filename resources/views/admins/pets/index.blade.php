@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <img src="{{ asset('site-icons/admin/ManagePets-removebg-preview.png') }}" alt="Manage Pets" width="70">
                <h1 class="display-5 font-weight-bold">Manage Pets</h1>
                <p class="mt-2">Browse and manage pets.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <style>
        /* Common styles for both mobile and web views */
        .table {
            background-color: white;
            color: black;
            border-radius: 10px;
        }

        .table th {
            background-color: white;
            border: none;
            white-space: nowrap;
            color: black; /* Set text color to black */
        }

        .table th a { /* Added this CSS rule for the anchor tags within th elements */
            color: black; /* Set anchor tag text color to black */
            text-decoration: none; /* Remove underline from anchor tags */
        }

        .table th a::after {
            content: '\2193'; /* Unicode for the down arrow */
            padding-left: 5px;
        }

        .table th a.sort-asc::after,
        .table th a.sort-desc::after {
            content: '\2191'; /* Unicode for the up arrow */
        }

        .table td {
            border: none;
            white-space: nowrap;
        }

        .table td:first-child {
            border-top-left-radius: 10px;
        }

        .table td:last-child {
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .add-pet-btn {
            margin-top: 10px;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        @media (max-width: 767px) {
        .container {
            max-width: 100%; /* Set maximum width to the viewport width */
            margin-right: 0; /* Remove right margin */
            margin-left: 0;  /* Remove left margin */
        }

        .table-responsive {
            overflow-x: auto;
        }
    }
        
    </style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h3>Adopted Dogs Over the Year</h3>
            <canvas id="adoptedDogsChart" width="400" height="400"></canvas>
        </div>
        <div class="col-md-6">
            <h3>Adopted Cats Over the Year</h3>
            <canvas id="adoptedCatsChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <button type="button" class="btn btn-primary add-pet-btn" data-toggle="modal" data-target="#addPetModal">Add Pet</button>
        <a href="{{ route('admins.pets.exportPdf') }}" class="btn btn-success">Export to PDF</a>
    </div>

<!-- Add Pet Modal -->
<div class="modal fade" id="addPetModal" tabindex="-1" role="dialog" aria-labelledby="addPetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPetModalLabel">Add a New Pet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add Pet Form Content -->
                <form method="POST" action="{{ route('admins.pets.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="pet_name">Name:</label>
                        <input type="text" name="pet_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select name="type" class="form-control" required>
                            <option value="" disabled selected>Choose Type</option>
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select name="gender" class="form-control" required>
                            <option value="" disabled selected>Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="species">Species:</label>
                        <input type="text" name="species" class="form-control">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="age_years">Age (Years):</label>
                            <input type="number" name="age_years" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age_months">Age (Months):</label>
                            <input type="number" name="age_months" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="up_for_adoption">For Adoption:</label>
                        <select name="up_for_adoption" class="form-control" required>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="customFile" onchange="updateFileNameLabel()">
                            <label class="custom-file-label" for="customFile" id="customFileLabel">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Pet</button>
                </form>
            </div>
        </div>
    </div>
</div>


    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <a href="{{ route('admins.pets.index', ['sort' => 'id', 'order' => $sort === 'id' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            ID
                            @if ($sort === 'id')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.pets.index', ['sort' => 'pet_name', 'order' => $sort === 'pet_name' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Name
                            @if ($sort === 'pet_name' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.pets.index', ['sort' => 'species', 'order' => $sort === 'species' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Species
                            @if ($sort === 'species' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.pets.index', ['sort' => 'year', 'order' => $sort === 'year' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Year
                            @if ($sort === 'year' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.pets.index', ['sort' => 'up_for_adoption', 'order' => $sort === 'up_for_adoption' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            For Adoption
                            @if ($sort === 'up_for_adoption' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $pet)
                <tr>
                    <td>{{ $pet->id }}</td>
                    <td>{{ $pet->pet_name }}</td>
                    <td>{{ ucfirst($pet->species) }}</td>
                    <td>
                        @if ($pet->age_years)
                            {{ $pet->age_years }} years
                        @endif
                        @if ($pet->age_months)
                            {{ $pet->age_months }} months
                        @endif
                    </td>
                    <td>{{ $pet->up_for_adoption }}</td>
                    <td class="actions">
    <a href="{{ route('admins.pets.view', $pet->id) }}" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#viewPetModal{{ $pet->id }}">View</a>
    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#editPetModal">Edit Pet</button>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletePetModal{{ $pet->id }}">Delete</button>
</td>

<!-- Delete Pet Modal -->
<div class="modal fade" id="deletePetModal{{ $pet->id }}" tabindex="-1" role="dialog" aria-labelledby="deletePetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePetModalLabel">Delete Pet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to remove this pet?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form method="POST" action="{{ route('admins.pets.delete', $pet->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- View Pet Modal -->
<div class="modal fade" id="viewPetModal{{ $pet->id }}" tabindex="-1" role="dialog" aria-labelledby="viewPetModal{{ $pet->id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewPetModal{{ $pet->id }}Label">View Pet Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Left Column: Pet Image -->
                        <div class="col-md-4 text-center" style="padding: 15px;">
                            <div style="background-color: #333; padding: 15px;">
                                @if ($pet->photo)
                                    <img src="{{ asset('storage/media/adoption/' . $pet->photo) }}" alt="Pet Photo" class="img-fluid mb-3" style="max-width: 200px;">
                                @else
                                    @if ($pet->type === 'Dog')
                                        <img src="{{ asset('site-icons/no-pic-dog.png') }}" alt="No Pet Photo" class="img-fluid mb-3" style="max-width: 200px;">
                                    @elseif ($pet->type === 'Cat')
                                        <img src="{{ asset('site-icons/no-pic-cat.png') }}" alt="No Pet Photo" class="img-fluid mb-3" style="max-width: 200px;">
                                    @endif
                                @endif
                            </div>
                            <h5 class="modal-title" style="font-weight: bold;">{{ $pet->pet_name }}</h5>
                        </div>
                        <!-- Right Column: Pet Details -->
                        <div class="col-md-8">
                            <form>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Type:</label>
                                    <p>{{ $pet->type }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Gender:</label>
                                    <p>{{ $pet->gender }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Species:</label>
                                    <p>{{ $pet->species }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Age:</label>
                                    <p>{{ $pet->age_years ? $pet->age_years.' years' : '' }}{{ $pet->age_years && $pet->age_months ? ', ' : '' }}{{ $pet->age_months ? $pet->age_months.' months' : '' }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">For Adoption:</label>
                                    <p>{{ $pet->up_for_adoption }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Description:</label>
                                    <p>{{ $pet->description }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Date Added:</label>
                                    <p>{{ $pet->created_at->format('F j, Y') }}</p>
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Last Updated:</label>
                                    <p>{{ $pet->updated_at->format('F j, Y') }}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Pet Modal -->
<div class="modal fade" id="editPetModal" tabindex="-1" role="dialog" aria-labelledby="editPetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPetModalLabel">Edit Pet Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Edit Pet Form Content -->
                <form method="POST" action="{{ route('admins.pets.update', $pet->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="pet_name">Pet Name</label>
                        <input type="text" name="pet_name" class="form-control" required value="{{ $pet->pet_name }}">
                    </div>

                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select name="type" class="form-control" required>
                            <option value="Dog" {{ $pet->type === 'Dog' ? 'selected' : '' }}>Dog</option>
                            <option value="Cat" {{ $pet->type === 'Cat' ? 'selected' : '' }}>Cat</option>
                        </select>
                    </div>

                    <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control" required>
                                <option value="Male" {{ $pet->gender === 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $pet->gender === 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                    <div class="form-group">
                        <label for="species">Species</label>
                        <input type="text" name="species" class="form-control" value="{{ $pet->species }}">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="age_years">Age (Years)</label>
                            <input type="number" name="age_years" class="form-control" required value="{{ $pet->age_years }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="age_months">Age (Months)</label>
                            <input type="number" name="age_months" class="form-control" required value="{{ $pet->age_months }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3" required>{{ $pet->description }}</textarea>
                    </div>

                    @if ($pet->up_for_adoption !== 'Processing' && $pet->up_for_adoption !== 'Adopted')
                        <div class="form-group">
                            <label for="up_for_adoption">For Adoption:</label>
                            <select name="up_for_adoption" class="form-control">
                                <option value="No" {{ $pet->up_for_adoption === 'No' ? 'selected' : '' }}>No</option>
                                <option value="Yes" {{ $pet->up_for_adoption === 'Yes' ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" class="form-control-file">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Pet</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
</tbody>
</table>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">

            {{-- First Page Link --}}
            @if ($pets->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">First</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $pets->url(1) }}" rel="first">First</a>
                </li>
            @endif

            {{-- Numbered Pages --}}
            @php
                $start = max(1, $pets->currentPage() - 2);
                $end = min($start + 4, $pets->lastPage());
            @endphp

            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $pets->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $pets->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Last Page Link --}}
            @if ($pets->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $pets->url($pets->lastPage()) }}" rel="last">Last</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">Last</span>
                </li>
            @endif

        </ul>
    </nav>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Use the data provided by the controller
        const adoptedDogsData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Adopted Dogs',
                data: {!! json_encode($adoptedDogsData) !!},
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        const adoptedCatsData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Adopted Cats',
                data: {!! json_encode($adoptedCatsData) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        // Get the canvas elements
        const adoptedDogsCanvas = document.getElementById('adoptedDogsChart');
        const adoptedCatsCanvas = document.getElementById('adoptedCatsChart');

        // Create the charts
        new Chart(adoptedDogsCanvas, {
            type: 'bar',
            data: adoptedDogsData,
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });

        new Chart(adoptedCatsCanvas, {
            type: 'bar',
            data: adoptedCatsData,
            options: {
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    }
                }
            }
        });
    });
</script>

@endsection
