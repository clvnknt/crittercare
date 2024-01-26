@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div>
                    <h1 class="display-5 font-weight-bold">Missing Pets</h1>
                    <p class="mt-2">View and manage missing pets reports.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <style>
            /* Add your custom styles here */
        </style>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Missing Pets per Year</h2>
                <canvas id="missingPetsPerYearChart"></canvas>
            </div>
            <div class="col-md-6">
                <h2>Missing Dogs and Cats per Year</h2>
                <canvas id="missingDogsAndCatsPerYearChart"></canvas>
            </div>
        </div>
        <br><br>

        <!-- Add this button where you want the "Export PDF" button to appear -->
        <a href="{{ route('admins.missing-pets.generate-missing-pets-reports') }}" class="btn btn-primary">Export Missing Pets PDF</a>
        <br><br>

        <div class="table-responsive-touch">
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
                    @foreach ($missingPets as $missingPet)
                        <tr>
                            <td>{{ $missingPet->pet_name }}</td>
                            <td>{{ $missingPet->type }}</td>
                            <td>{{ $missingPet->species }}</td>
                            <td>{{ $missingPet->status }}</td>
                            <td class="actions">
                                <a href="{{ route('admins.missing-pets.show', ['missingPet' => $missingPet]) }}" class="btn btn-primary btn-sm">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if($missingPets->onFirstPage())
                <li class="page-item disabled"><span class="page-link">First</span></li>
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $missingPets->url(1) }}">First</a></li>
                <li class="page-item"><a class="page-link" href="{{ $missingPets->previousPageUrl() }}" rel="prev">Previous</a></li>
            @endif

            @for ($i = $missingPets->currentPage(); $i <= min($missingPets->lastPage(), $missingPets->currentPage() + 4); $i++)
                <li class="page-item {{ $i == $missingPets->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ $missingPets->url($i) }}">{{ $i }}</a></li>
            @endfor

            @if ($missingPets->currentPage() < $missingPets->lastPage() - 4)
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="{{ $missingPets->url($missingPets->currentPage() + 5) }}">{{ $missingPets->currentPage() + 5 }}</a></li>
            @endif

            @if ($missingPets->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $missingPets->nextPageUrl() }}" rel="next">Next</a></li>
                <li class="page-item"><a class="page-link" href="{{ $missingPets->url($missingPets->lastPage()) }}">Last</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
                <li class="page-item disabled"><span class="page-link">Last</span></li>
            @endif
        </ul>
    </nav>
</div>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Bar chart for Missing Pets per Year
            var ctxBar = document.getElementById('missingPetsPerYearChart').getContext('2d');

            var barChart = new Chart(ctxBar, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($years) !!},
                    datasets: [{
                        label: 'Missing Pets per Year',
                        data: {!! json_encode($counts) !!},
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Bar chart for Missing Dogs and Cats per Year
            var ctxBarDogsAndCats = document.getElementById('missingDogsAndCatsPerYearChart').getContext('2d');

            var barChartDogsAndCats = new Chart(ctxBarDogsAndCats, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($dogsYears) !!},
                    datasets: [{
                        label: 'Missing Dogs',
                        data: {!! json_encode($dogsCounts) !!},
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Missing Cats',
                        data: {!! json_encode($catsCounts) !!},
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endsection
