@extends('layouts.app')

@section('content')
<div class="container custom-bg white-bg">
    <div class="d-flex justify-content-center mt-3">
        <div class="col-md-6">
            <div class="card custom-card bg-white">
                <div class="card-body">
                    <h5 class="card-title">{{ $report->caseType->name }}</h5>

                    <div class="media-container">
                        <p class="label"><strong>Status</strong></p>
                        <p>
                            @if($report->status === 'pending')
                                <span class="badge badge-warning">Pending</span> - Awaiting further action.
                            @elseif($report->status === 'acknowledged')
                                <span class="badge badge-info">Acknowledged</span> - Your report has been received and is under review.
                            @elseif($report->status === 'solved')
                                <span class="badge badge-success">Solved</span> - The reported issue has been resolved.
                            @elseif($report->status === 'cancelled')
                                <span class="badge badge-danger">Cancelled</span> - The report has been cancelled and won't be further processed.
                            @else
                                Unknown status
                            @endif
                        </p>

                        <p class="label"><strong>Description</strong></p>
                        <p>{{ $report->description }}</p>

                        @if ($report->picture)
                            <div class="media-item">
                                <p class="label"><strong>Picture</strong></p>
                                <img src="{{ asset('storage/' . $report->picture) }}" alt="Report Picture" class="img-fluid">
                            </div>
                        @else
                            <p class="label"><strong>Picture</strong></p>
                            <p>No picture provided.</p>
                        @endif

                        @if ($report->video)
                            <div class="media-item">
                                <p class="label"><strong>Video</strong></p>
                                <video controls class="img-fluid">
                                    <source src="{{ asset('storage/' . $report->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @else
                            <p class="label"><strong>Video</strong></p>
                            <p>No video provided.</p>
                        @endif
                    </div>
                    
                    <div class="text-right mt-3">
                        <a href="{{ route('users.reports.index') }}" class="btn btn-secondary">
                            Back to Reports
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
