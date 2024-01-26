@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>User Dashboard</h1>
        </div>
    </div>
</div>

@php
$cards = [
    [
        'title' => 'Adopt',
        'description' => 'Browse and adopt pets looking for a home.',
        'route' => route('users.available-pets.index'),
        'image' => asset('site-icons/user/adopt.png'),
    ],
    [
        'title' => 'Missing Pets',
        'description' => 'View and report missing pets in your area.',
        'route' => route('users.missing-pets'),
        'image' => asset('site-icons/user/missings.png'),
    ],
    [
        'title' => 'View or Report Cases',
        'description' => 'View and report animal welfare cases.',
        'route' => route('users.reports.index'),
        'image' => asset('site-icons/user/cases.png'),
    ],
    [
        'title' => 'Account Settings',
        'description' => 'Manage your account settings and profile.',
        'route' => route('users.account-settings'),
        'image' => asset('site-icons/user/setting.png'),
    ],
];
@endphp

<div class="row justify-content-center">
    @foreach($cards as $card)
    <div class="col-md-4 mb-4">
        <section class="user_function_section layout_padding-bottom">
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
@endsection