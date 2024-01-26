@extends('layouts.app')

@section('content')
<div class="container custom-bg white-bg">
    <div class="text-center rounded-lg p-4">
        <div class="img-container">
            <img src="{{ asset('site-icons/user/reports.png') }}" alt="Your Reports Banner">
        </div>
        <h1 class="display-4 text-black mt-3">Your Reports</h1>
        <p class="mt-2 text-black">View and manage your reports.</p>
        <a href="{{ route('users.reports.create') }}" class="btn btn-custom rounded-pill mt-3" style="background-color: #B31312; color: white; font-weight: 500; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#DC8686'" onmouseout="this.style.backgroundColor='#B31312'">Create Report</a>
    </div>
    
    <div class="d-flex flex-wrap justify-content-start mt-3">
        @foreach ($reportedCases as $report)
            <div class="col-md-4 mb-3">
                <a href="{{ route('users.reports.show', ['report' => $report]) }}" class="card-link">
                    <div class="card custom-card bg-white">
                        <div class="card-body">
                            <h5 class="card-title">{{ $report->caseType->name }}</h5>
                            <p class="card-text">{{ $report->status }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    
    <!-- Pagination -->
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($reportedCases->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $reportedCases->previousPageUrl() }}" rel="prev">Previous</a>
                            </li>
                        @endif

                        {{-- Numbered Pages --}}
                        @for ($i = 1; $i <= $reportedCases->lastPage(); $i++)
                            <li class="page-item {{ $i == $reportedCases->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $reportedCases->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor

                        {{-- Next Page Link --}}
                        @if ($reportedCases->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $reportedCases->nextPageUrl()" rel="next">Next</a>
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
</div>

<style>
    .white-bg {
        background-color: #AEDEFC;
        border-radius: 20px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .custom-bg {
        background-color: #AEDEFC;
    }

    .custom-card {
        width: 100%;
        height: 100%;
        background-color: #FFF8EA;
        border: 1px solid #dee2e6;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        color: #FFA41B; 
    }

    .custom-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: translateY(-6px);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        color: #F67280; 
    }

    .img-container {
        width: 150px;
        height: 150px;
        display: flex;
        justify-content: center;
        margin: 0 auto;
        margin-top: 1rem;
    }

</style>
@endsection
