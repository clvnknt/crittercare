@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <img src="{{ asset('site-icons/admin/CaseTypes-removebg-preview.png') }}" alt="CritterCare" width="70">
                <h1 class="display-5 font-weight-bold">Case Types</h1>
                <p class="mt-2">View and manage animal welfare case types.</p>
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
            display: inline-block;
            position: relative;
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

        .add-case-type-btn {
            margin-top: 10px;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination > .page-item > .page-link {
            color: black !important;
        }

        /* Color indicators for Severity column */
        .severity {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .severity-low {
            background-color: green;
        }

        .severity-medium {
            background-color: yellow;
        }

        .severity-high {
            background-color: red;
        }

        /* Styles for mobile view (small screens) */
        @media screen and (max-width: 767px) {
            .table-responsive {
            overflow-x: auto;
        }

        .table {
            /* Adjust font size and padding for smaller screens */
            font-size: 14px;
            padding: 8px;
        }
            
        }
    </style>

    <!-- Add Case Type Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="#addCaseTypeModal" class="btn btn-primary add-case-type-btn" data-toggle="modal">Add Case Type</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <a href="{{ route('admins.case-types.index', ['sort' => 'id', 'order' => $sort === 'id' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            ID
                            @if ($sort === 'id')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.case-types.index', ['sort' => 'name', 'order' => $sort === 'name' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Name
                            @if ($sort === 'name' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.case-types.index', ['sort' => 'severity', 'order' => $sort === 'severity' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Severity
                            @if ($sort === 'severity' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.case-types.index', ['sort' => 'created_at', 'order' => $sort === 'created_at' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Created At
                            @if ($sort === 'created_at' && $order === 'asc')
                                <span class="sort-asc"></span>
                            @else
                                <span class="sort-desc"></span>
                            @endif
                        </a>
                    </th>
                    <th>
                        <a href="{{ route('admins.case-types.index', ['sort' => 'updated_at', 'order' => $sort === 'updated_at' && $order === 'asc' ? 'desc' : 'asc']) }}">
                            Updated At
                            @if ($sort === 'updated_at' && $order === 'asc')
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
                @foreach ($caseTypes as $caseType)
                <tr>
                    <td>{{ $caseType->id }}</td>
                    <td>{{ $caseType->name }}</td>
                    <td>{{ $caseType->type }}</td>
                    <td>
                        <span class="severity severity-{{ strtolower($caseType->severity) }}"></span>
                        {{ $caseType->severity }}
                    </td>
                    <td>{{ $caseType->created_at->format('F j, Y') }}</td>
                    <td>{{ $caseType->updated_at->format('F j, Y') }}</td>
                    <td class="actions">
                        <a href="#editModal{{ $caseType->id }}" class="btn btn-primary btn-sm" data-toggle="modal">Edit</a>
                        <a href="#deleteModal{{ $caseType->id }}" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($caseTypes->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $caseTypes->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
                @endif

                {{-- Numbered Pages --}}
                @for ($i = 1; $i <= $caseTypes->lastPage(); $i++)
                    <li class="page-item {{ $i == $caseTypes->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $caseTypes->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                {{-- Next Page Link --}}
                @if ($caseTypes->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $caseTypes->nextPageUrl() }}" rel="next">Next</a>
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

<!-- Edit Modals -->
@foreach ($caseTypes as $caseType)
<div class="modal fade" id="editModal{{ $caseType->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Case Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admins.case-types.update', ['caseType' => $caseType]) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $caseType->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-control">
                            <option value="Dog" {{ $caseType->type == 'Dog' ? 'selected' : '' }}>Dog</option>
                            <option value="Cat" {{ $caseType->type == 'Cat' ? 'selected' : '' }}>Cat</option>
                            <option value="Others" {{ $caseType->type == 'Others' ? 'selected' : '' }}>Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="severity" class="form-label">Severity</label>
                        <select name="severity" class="form-control">
                            <option value="Low" {{ $caseType->severity == 'Low' ? 'selected' : '' }}>Low</option>
                            <option value="Medium" {{ $caseType->severity == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="High" {{ $caseType->severity == 'High' ? 'selected' : '' }}>High</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Case Type</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Delete Confirmation Modals -->
@foreach ($caseTypes as $caseType)
<div class="modal fade" id="deleteModal{{ $caseType->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Case Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Case Type?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="{{ route('admins.case-types.destroy', ['caseType' => $caseType]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Add Case Type Modal -->
<div class="modal fade" id="addCaseTypeModal" tabindex="-1" role="dialog" aria-labelledby="addCaseTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCaseTypeModalLabel">Create Case Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admins.case-types.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-control">
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="severity" class="form-label">Severity</label>
                        <select name="severity" class="form-control">
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Case Type</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Add this script below your CSS styles -->
<script>
    $(document).ready(function () {
        // Function to handle column sorting
        $('th a').click(function () {
            var url = $(this).attr('href');
            
            // Check the current sort order
            if ($(this).hasClass('sort-asc')) {
                // If it's already sorted in ascending order, switch to descending
                url += '&order=desc';
            } else {
                // If it's not sorted or sorted in descending order, switch to ascending
                url += '&order=asc';
            }
            
            // Redirect to the new URL with the sorting parameter
            window.location.href = url;
            return false;
        });
    });
</script>

@endsection
