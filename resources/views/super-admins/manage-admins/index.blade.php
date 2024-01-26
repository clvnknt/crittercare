@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <h1 class="display-5">Manage Admins</h1>
                <p class="mt-2">Manage admin accounts and settings.</p>
            </div>
        </div>
    </div>


<div class="container mt-4">
    <style>
        /* Add custom styles for this page */
        /* ... */

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

    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('super-admins.manage-admins.create') }}" class="btn btn-primary">Add Admin</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Promoted At</th> <!-- Change column name to "Promoted At" -->
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->first_name }}</td>
                    <td>{{ $admin->last_name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        @if ($admin->promotions->isNotEmpty())
                        {{ $admin->promotions->first()->promoted_at }}
                         @else
                          N/A
                          @endif
                    </td>
                    <td class="actions">
                        <!--<a href="{{ route('super-admins.manage-admins.edit', $admin->id) }}" class="btn btn-secondary">Edit</a>
                        <form method="POST" action="{{ route('super-admins.manage-admins.delete', $admin->id) }}"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to remove this admin?')">Remove</button>
                        </form>-->
                        <form method="POST" action="{{ route('super-admins.manage-admins.demote', $admin->id) }}"
                            style="display: inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-warning"
                                onclick="return confirm('Are you sure you want to demote this admin?')">Demote</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No admins available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>

 <!-- Pagination Links -->
 <div class="d-flex justify-content-center mt-4">
            <ul class="pagination">
                <!-- First Page Link -->
                <li class="{{ ($admins->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                    <a class="page-link" href="{{ $admins->url(1) }}" aria-label="First">
                        <span aria-hidden="true">&laquo;&laquo;</span>
                    </a>
                </li>

                <!-- Previous Page Link -->
                <li class="{{ ($admins->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                    <a class="page-link" href="{{ $admins->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <!-- Page Numbers -->
                @for ($i = 1; $i <= $admins->lastPage(); $i++)
                    <li class="{{ ($admins->currentPage() == $i) ? 'page-item active' : 'page-item' }}">
                        <a class="page-link" href="{{ $admins->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Next Page Link -->
                <li class="{{ ($admins->currentPage() == $admins->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                    <a class="page-link" href="{{ $admins->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>

                <!-- Last Page Link -->
                <li class="{{ ($admins->currentPage() == $admins->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                    <a class="page-link" href="{{ $admins->url($admins->lastPage()) }}" aria-label="Last">
                        <span aria-hidden="true">&raquo;&raquo;</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


@endsection
