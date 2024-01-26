@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Content for the top of the page (optional) -->
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header" style="border-radius: 24px 24px 0 0; background-color: #435585; color: white; text-shadow: 0 0 0.8px black;">
            <h1>Report Details</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="full_name"><strong>Full Name</strong></label>
                        <p>
                            @isset($report->user)
                                {{ $report->user->first_name }} {{ $report->user->last_name }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="date_of_report"><strong>Date of Report</strong></label>
                        <p>
                            @isset($report->created_at)
                                {{ $report->created_at->format('F j, Y') }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="username"><strong>Username</strong></label>
                        <p>
                            @isset($report->user)
                                {{ $report->user->username }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <p>
                            @isset($report->user)
                                {{ $report->user->email }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_number"><strong>Contact Number</strong></label>
                        <p>
                            @isset($report->user)
                                {{ $report->user->phone_number }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="status"><strong>Status</strong></label>
                        <p>
                            @isset($report->status)
                                {{ $report->status }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="description"><strong>Description</strong></label>
                        <p>
                            @isset($report->description)
                                {{ $report->description }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>

                    <div class="form-group">
                        <label for="date"><strong>Date</strong></label>
                        <p>
                            @isset($report->created_at)
                                {{ $report->created_at->format('F j, Y') }}
                            @else
                                No information provided.
                            @endisset
                        </p>
                    </div>
                </div>
            </div>

            @if ($report->picture)
                <p class="card-text"><strong>Picture</strong></p>
                <img src="{{ asset('storage/' . $report->picture) }}" class="img-fluid media" alt="Report Picture">
            @endif

            @if ($report->video)
                <p class="card-text"><strong>Video</strong></p>
                <video controls class="media">
                    <source src="{{ asset('storage/' . $report->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif
        </div>
    </div>
    <div class="text-right mt-3">
    @if ($report->status !== 'cancelled' && $report->status !== 'solved')
    <!-- Display the button for updating status -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateStatusModal">Update Status</button>
@else
    <!-- Display a message that a new report needs to be created -->
    <p class="text-danger">This report has been marked as either solved or cancelled.</p>
@endif


                 <a href="{{ route('admins.reports.view') }}" class="btn btn-secondary">Back</a>
                </div>
<style>
    .media {
        width: 20%;
        height: auto;
    }
</style>


<!-- Modal -->
<div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStatusModalLabel">Update Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Include the form for updating status here -->
                <form action="{{ route('reports.updateStatus', $report) }}" method="post">
                    @csrf
                    @method('patch') <!-- or use @method('post') -->

                    <div class="form-group">
                        <label for="newStatus" class="label">New Status:</label>
                        <select name="newStatus" id="newStatus" class="form-control">
                            <option value="acknowledged" {{ $report->status === 'acknowledged' ? 'selected' : '' }}>Acknowledged</option>
                            <option value="solved" {{ $report->status === 'solved' ? 'selected' : '' }}>Solved</option>
                            <option value="cancelled" {{ $report->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
