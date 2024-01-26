@extends('layouts.app')

@section('content')

                <!-- Centered icon -->
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('site-icons/admin/AdoptionRequests-removebg-preview.png') }}" alt="Adoption Requests" class="card-icon mb-3" style="max-width: 100px;">
                </div>
                <h1 class ="text-black text-center">Adoption Requests</h1>
                <p class="mt-2 text-black text-center">Manage adoption requests from users.</p>
        
<div class="container mt-4">
    <style>
        .custom-card {
            background-color: transparent;
            color: white;
            border: none;
        }

        .dark-description {
            color: white;
        }

        /* Display buttons horizontally and vertically align them */
        .actions {
            display: flex;
            flex-wrap: wrap; /* Wrap buttons to the next line if necessary */
            align-items: center;
            gap: 5px; /* Adjust the spacing between buttons as needed */
        }

        /* Style the buttons in the actions column */
        .actions .btn {
            color: white !important;
            margin-bottom: 0; /* Remove margin that causes the white line below buttons */
        }

        /* Set background color for the table headers and rows */
        .table th,
        .table td {
            background-color: white;
            color: black;
            border: none; /* Remove borders to eliminate spacing issues */
        }

        .table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden; /* Ensure content doesn't overflow rounded corners */
        }
    </style>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Adopter's Name</th>
                    <th>Pet Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($adoptionRequests as $request)
                <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->user->first_name }}</td>
                    <td>{{ $request->pet->pet_name }}</td>
                    <td>
                        {{-- Show the adoption status here --}}
                        @if ($request->adoptionStatus)
                            {{ ucfirst($request->adoptionStatus->status) }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="actions">
                        <a href="{{ route('admins.adoption-requests.view-specific-adoption-request', $request->id) }}" class="btn btn-primary">View</a>
                        <!-- Add more action buttons as needed -->
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No adoption requests available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($adoptionRequests->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $adoptionRequests->previousPageUrl() }}" rel="prev">Previous</a>
                    </li>
                @endif

                {{-- Numbered Pages --}}
                @for ($i = 1; $i <= $adoptionRequests->lastPage(); $i++)
                    <li class="page-item {{ $i == $adoptionRequests->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $adoptionRequests->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                {{-- Next Page Link --}}
                @if ($adoptionRequests->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $adoptionRequests->nextPageUrl() }}" rel="next">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
</div>
@endsection
