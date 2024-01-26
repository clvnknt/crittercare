@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Super Admin Dashboard</h1>
        </div>
    </div>
</div>

<div class="container mt-4">
    <style>
        .card-link {
            color: #333;
            text-decoration: none;
        }

        .card-icon {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .custom-card {
            background-color: #454545;
            color: white;
        }

        .total-stats {
            color: #007bff; /* Change the color for total stats */
        }

        .total-card {
            background-color: #333; /* Change the background color for total cards */
        }
    </style>

    <!-- Total Users and Total Admins Cards -->
    
<div class="container mt-4">
    <canvas id="myChart"></canvas>
</div>

    <!--<div class="row justify-content-center">
 
        <div class="col-md-3 mb-4">
            <div class="card custom-card total-card h-100">
                <div class="card-body text-center">
                    <img src="{{ asset('icons/users.png') }}" alt="Total Users Icon" class="card-icon mb-3">
                    <h5 class="card-title total-stats">Total Users</h5>
                    <p class="card-text">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card custom-card total-card h-100">
                <div class="card-body text-center">
                    <img src="{{ asset('icons/admin.png') }}" alt="Total Admins Icon" class="card-icon mb-3">
                    <h5 class="card-title total-stats">Total Admins</h5>
                    <p class="card-text">{{ $totalAdmins }}</p>
                </div>
            </div>
        </div>
    </div>-->
<br>


@php
$cards = [
    [
        'title' => 'Manage Users',
        'description' => 'Manage user accounts and settings.',
        'route' => route('super-admins.manage-users.index'),
        'image' => asset('site-icons/superadmin/manage-users.png'),
    ],
    [
        'title' => 'Manage Admins',
        'description' => 'Manage user accounts and settings.',
        'route' => route('super-admins.manage-admins.index'),
        'image' => asset('site-icons/superadmin/manage-admins.png'),
    ],
];
@endphp

<div class="row justify-content-center">
    @foreach($cards as $card)
    <div class="col-md-4 mb-4">
        <section class="superadmin_function_section layout_padding-bottom">
            <div class="container">
                <div class="row grid">
                    <div class="col-12">
                        <a href="{{ $card['route'] }}"> 
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $card['title'] }}</h5>
                                    <p>{{ $card['description'] }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endforeach
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // change this to the type of chart you want (line, bar, pie, etc.)
            data: {
                labels: ['Admins', 'Super Admins', 'Users'],
                datasets: [{
                    label: 'User Distribution by Role',
                    data: [{{ $adminsCount }}, {{ $superAdminsCount }}, {{ $regularUsersCount }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                    ],
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
