@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <h1 class="display-5">Manage Users</h1>
                <p class="mt-2">View registered user accounts.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <style>
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
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Registered At</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number ?? 'N/A' }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">No users available.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
        <ul class="pagination">
            <!-- First Page Link -->
            <li class="{{ ($users->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                <a class="page-link" href="{{ $users->url(1) }}" aria-label="First">
                    <span aria-hidden="true">&laquo;&laquo;</span>
                </a>
            </li>

            <!-- Previous Page Link -->
            <li class="{{ ($users->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <!-- Page Numbers -->
            @for ($i = 1; $i <= $users->lastPage(); $i++)
                <li class="{{ ($users->currentPage() == $i) ? 'page-item active' : 'page-item' }}">
                    <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <!-- Next Page Link -->
            <li class="{{ ($users->currentPage() == $users->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>

            <!-- Last Page Link -->
            <li class="{{ ($users->currentPage() == $users->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                <a class="page-link" href="{{ $users->url($users->lastPage()) }}" aria-label="Last">
                    <span aria-hidden="true">&raquo;&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
