@extends('layouts.app')

@section('content')

<style>
    /* Add custom styles for charts */
    .chart-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
    }

    .chart {
        width: 100%; /* Adjust the width as needed */
        max-width: 400px; /* Set a maximum width */
        margin-bottom: 20px; /* Add some space between charts */
    }

    /* Common styles for both mobile and web views */
    .table {
        background-color: white;
        color: black;
        border-radius: 10px;
        margin-top: 20px; /* Add some space at the top of the table */
    }

    .table th,
    .table td {
        border: none;
        white-space: nowrap;
        padding: 10px; /* Adjust padding as needed */
    }

    .table th {
        background-color: white;
        color: black; /* Set text color to black */
    }

    .table th a { /* Added this CSS rule for the anchor tags within th elements */
        color: black; /* Set anchor tag text color to black */
        text-decoration: none; /* Remove underline from anchor tags */
        display: inline-block;
        position: relative;
    }

    .table td:first-child {
        border-top-left-radius: 10px;
    }

    .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .pagination {
            justify-content: center;
            margin-top: 20px;
        }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <h1 class="display-5 font-weight-bold">Reports</h1>
                <p class="mt-2">View and manage animal welfare reports.</p>
            </div>
        </div>
    </div>
</div>

<!-- Display Reports Chart and Reports Status Chart side by side -->
<div class="chart-container">
    <div class="chart">
        <h3 class="text-center mb-3">Reports Chart</h3>
        <canvas id="reportsChart" height="200"></canvas>
    </div>

    <div class="chart">
        <h3 class="text-center mb-3">Reports Status Chart</h3>
        <canvas id="reportsStatusChart" height="200"></canvas>
    </div>
</div>

<a href="{{ route('admins.reports.export-pdf') }}" class="btn btn-primary">Export Reports PDF</a>

<div class="container mt-4">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Case Type</th>
                    <th>Severity</th>
                    <th>User's Name</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->caseType->type }}</td>
                    <td>{{ $report->caseType->name }}</td>
                    <td>
                        <span class="severity severity-{{ strtolower($report->caseType->severity) }}"></span>
                        {{ $report->caseType->severity }}
                    </td>
                    <td>{{ $report->user->first_name }} {{ $report->user->last_name }}</td>
                    <td>{{ $report->created_at->format('F j, Y') }}</td>
                    <td>{{ $report->status }}</td>
                    <td class="actions">
                        <a href="{{ route('reports.show', ['report' => $report]) }}" class="btn btn-info btn-sm">View</a>
                        <!--<a href="#deleteModal{{ $report->id }}" class="btn btn-danger btn-sm" data-toggle="modal">Delete</a>-->
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
            @if ($reports->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $reports->previousPageUrl() }}" rel="prev">Previous</a>
                </li>
            @endif

            {{-- Numbered Pages --}}
            @php
                $start = max(1, $reports->currentPage() - 3);
                $end = min($start + 5, $reports->lastPage());
            @endphp

            @for ($i = $start; $i <= $end; $i++)
                <li class="page-item {{ $i == $reports->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $reports->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($reports->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $reports->nextPageUrl() }}" rel="next">Next</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Extract data for the Reports Chart
    const reportsData = {
        labels: ['Dog', 'Cat', 'Others'],
        datasets: [{
            data: {!! json_encode($reportsByType) !!},
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
            borderWidth: 1
        }]
    };

    // Reports Chart
    const reportsChart = new Chart(document.getElementById('reportsChart').getContext('2d'), {
        type: 'bar',
        data: reportsData,
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1,
                    }
                }
            },
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            return context.parsed.y;
                        },
                        title: function (context) {
                            return context[0].label;
                        }
                    }
                }
            }
        }
    });

    const reportsStatusData = {
        labels: ['Ongoing', 'Solved'],
        datasets: [{
            data: {!! json_encode($reportsStatusData) !!},
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
            borderWidth: 1
        }]
    };

    // Reports Status Chart
    const reportsStatusChart = new Chart(document.getElementById('reportsStatusChart').getContext('2d'), {
        type: 'pie',
        data: reportsStatusData,
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            return context.label + ': ' + context.parsed.toFixed(2) + '%';
                        },
                        title: function () {
                            return null;
                        }
                    }
                }
            }
        }
    });

    // Custom legend
    const customLegend = document.getElementById('custom-legend');
    reportsData.labels.forEach((label, index) => {
        const legendItem = document.createElement('div');
        legendItem.classList.add('legend-item');
        legendItem.innerHTML = `
            <span class="legend-color" style="background-color: ${reportsData.datasets[0].backgroundColor[index]}"></span>
            <span class="legend-label">${label}</span>
        `;
        customLegend.appendChild(legendItem);
    });
});

</script>

@endsection
