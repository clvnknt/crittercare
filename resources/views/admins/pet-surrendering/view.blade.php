@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <h1 class="display-5 text-dark font-weight-bold">Pet Surrendering</h1>
                <p class="mt-2 text-dark">View and manage pet surrender requests.</p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <style>
        .custom-card {
            background-color: #333;
            color: white;
            border: none; /* Remove borders to eliminate spacing issues */
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
            background-color: #333;
            color: white;
            border: none; /* Remove borders to eliminate spacing issues */
        }

        .table {
            border-radius: 10px;
            overflow: hidden; /* Ensure content doesn't overflow rounded corners */
        }
    </style>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Pet Name</th>
                    <th>Type</th>
                    <th>Species</th>
                    <th>Current Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($petSurrenders as $petSurrender)
                <tr>
                    <td>{{ $petSurrender->pet_name }}</td>
                    <td>{{ $petSurrender->type }}</td>
                    <td>{{ $petSurrender->species }}</td>
                    <td>{{ $petSurrender->status }}</td>
                    <td class="actions">
                        <a href="{{ route('admins.pet-surrenders.show', ['petSurrender' => $petSurrender]) }}" class="btn btn-info btn-sm">View Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
