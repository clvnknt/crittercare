@extends('layouts.app')

@section('content')

@php
$cards = [
    [
        'title' => 'Manage Pets',
        'description' => 'Add, edit, and remove from the pet listings.',
        'route' => route('admins.pets.index'),
        'image' => asset('site-icons/admin/paw.png'),
    ],
    [
        'title' => 'Adoption Requests',
        'description' => 'Manage adoption requests from users.',
        'route' => route('admins.adoption-requests.view'),
        'image' => asset('site-icons/admin/request.png'),
    ],
    [
        'title' => 'Pet Monitoring',
        'description' => 'Monitor the conditions of adopted pets.',
        'route' => route('admins.pet-monitoring.index'),
        'image' => asset('site-icons/admin/monitor.png'),
    ],
    [
        'title' => 'Missing Pet Reports',
        'description' => 'View and manage missing animals in the area.',
        'route' => route('admins.missing-pets.index'),
        'image' => asset('site-icons/admin/find.png'),
    ],
    [
        'title' => 'Manage Case Types',
        'description' => 'View and manage animal welfare reports.',
        'route' => route('admins.case-types.index'),
        'image' => asset('site-icons/admin/cases.png'),
    ],
    [
        'title' => 'Manage User Reports',
        'description' => 'View and manage animal welfare reports.',
        'route' => route('admins.reports.view'),
        'image' => asset('site-icons/admin/report.png'),
    ],
    [
        'title' => 'Account Settings',
        'description' => 'View and change your account details.',
        'route' => route('users.account-settings'),
        'image' => asset('site-icons/admin/account.png'),
    ],
];
@endphp

<div class="custom-bg rounded-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center custom-bg p-4">
                <h1 class="display-5 font-weight-bold">Admin Dashboard</h1>
                <p class="mt-2">Manage various aspects of the system.</p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    @foreach($cards as $card)
    <div class="col-md-4">
        <section class="function_section layout_padding-bottom">
            <div class="container">
                <div class="row grid">
                    <div class="col-12">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}">
                            </div>
                            <div class="detail-box">
                                <h5>{{ $card['title'] }}</h5>
                                <p>{{ $card['description'] }}</p>
                                <div class="btn-box">
                                    <a href="{{ $card['route'] }}">
                                        View More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endforeach
</div>
@endsection
