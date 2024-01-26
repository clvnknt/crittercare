@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Header Section (Add your header content here) -->
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <img src="{{ asset('site-icons/admin/CaseTypes-removebg-preview.png') }}" alt="CritterCare" width="70">
                <h1 class="display-5 font-weight-bold">Pet Monitoring Records</h1>
                <p class="mt-2">View and manage pet monitoring records.</p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <style>
        table {
        background-color: white;
        color: black;
    }

    /* Style table headers */
    table th {
        background-color: #f1f1f1; /* Light gray background for headers */
    }

    /* Style table rows on hover */
    table tr:hover {
        background-color: #f5f5f5; /* Light gray background on hover */
    }
    </style>

    <!-- Table and Pagination Section -->
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th> <!-- Table header for ID -->
                    <th>Pet Name</th> <!-- Table header for Pet Name -->
                    <th>Condition</th> <!-- Table header for Condition -->
                    <th>Status</th> <!-- Table header for Status -->
                    <th>Actions</th> <!-- Table header for Actions -->
                </tr>
            </thead>
            <tbody>
                @foreach ($petMonitoring as $monitoring)
                <tr>
                    <td>{{ $monitoring->id }}</td> <!-- Display record ID -->
                    <td>{{ $monitoring->pet->pet_name }}</td> <!-- Display Pet Name -->
                    <td>{{ $monitoring->condition }}</td> <!-- Display Condition -->
                    <td>{{ $monitoring->status }}</td> <!-- Display Status -->
                    <td class="actions">
                        <a href="#changeStatusModal{{ $monitoring->id }}" class="btn btn-primary btn-sm" data-toggle="modal">Change Status</a> <!-- Button to Change Status -->
                        @if ($monitoring->status === 'Monitoring')
                        <a href="#monitoringActionModal{{ $monitoring->id }}" class="btn btn-danger btn-sm" data-toggle="modal">Stop Monitoring</a>
                        @else
                        <a href="#monitoringActionModal{{ $monitoring->id }}" class="btn btn-success btn-sm" data-toggle="modal">Re-enable Monitoring</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Pagination Section -->
<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($petMonitoring->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $petMonitoring->previousPageUrl() }}" rel="prev">Previous</a>
            </li>
            @endif

            {{-- Numbered Pages --}}
            @for ($i = 1; $i <= $petMonitoring->lastPage(); $i++)
                <li class="page-item {{ $i == $petMonitoring->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $petMonitoring->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($petMonitoring->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $petMonitoring->nextPageUrl() }}" rel="next">Next</a>
            </li>
            @else
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
            @endif
        </ul>
    </nav>
</div>


<!-- Change Status Modals -->
@foreach ($petMonitoring as $monitoring)
<div class="modal fade" id="changeStatusModal{{ $monitoring->id }}" tabindex="-1" role="dialog" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusModalLabel">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('admins.pet-monitoring.change-status', ['monitoring' => $monitoring->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="new_condition" class="form-label">New Condition</label>
                        <select name="new_condition" class="form-control">
                            <option value="Good">Good</option>
                            <option value="Fair">Fair</option>
                            <option value="Poor">Poor</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- Update Notes Modals -->
@foreach ($petMonitoring as $monitoring)
<div class="modal fade" id="updateNotesModal{{ $monitoring->id }}" tabindex="-1" role="dialog" aria-labelledby="updateNotesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateNotesModalLabel">Update Notes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('admins.pet-monitoring.update-notes', ['monitoring' => $monitoring->id]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="new_notes" class="form-label">New Notes</label>
                        <textarea name="new_notes" class="form-control" rows="3">{{ $monitoring->notes }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Notes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


<!-- Stop Monitoring and Re-enable Monitoring Modals -->
@foreach ($petMonitoring as $monitoring)
<div class="modal fade" id="monitoringActionModal{{ $monitoring->id }}" tabindex="-1" role="dialog" aria-labelledby="monitoringActionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="monitoringActionModalLabel">
                    @if ($monitoring->status === 'Monitoring')
                        Stop Monitoring
                    @else
                        Re-enable Monitoring
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($monitoring->status === 'Monitoring')
                    Are you sure you want to stop monitoring for this pet?
                @else
                    Are you sure you want to re-enable monitoring for this pet?
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form method="post" action="{{ $monitoring->status === 'Monitoring' ? route('admins.pet-monitoring.stop-monitoring', ['monitoring' => $monitoring]) : route('admins.pet-monitoring.re-enable-monitoring', ['monitoring' => $monitoring]) }}">
                    @csrf
                    @if ($monitoring->status === 'Monitoring')
                    <button type="submit" class="btn btn-danger">Stop Monitoring</button>
                    @else
                    <button type="submit" class="btn btn-success">Re-enable Monitoring</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



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
