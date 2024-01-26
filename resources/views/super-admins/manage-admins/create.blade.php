@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <div>
                <h1 class="display-5 text-dark">Promote Users to Admins</h1>
                <p class="mt-2 text-dark">Select users to promote to admin status.</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <form method="POST" action="{{ route('super-admins.manage-admins.promote') }}">
        @csrf
        <div class="d-flex justify-content-start mb-3">
            <button type="submit" class="btn btn-primary">Promote Selected Users</button>
        </div>
        <style>
            /* Add your custom styles for the form here */
            .table th,
            .table td {
                background-color: #333;
                color: white;
                border: none; /* Remove borders to eliminate spacing issues */
                text-align: center; /* Center-align content within table cells */
            }

            .table {
                border-radius: 10px;
                overflow: hidden; /* Ensure content doesn't overflow rounded corners */
            }

            .table th {
                text-align: center;
            }

            /* Responsive styles for small screens */
            @media (max-width: 767px) {
                .table th,
                .table td {
                    font-size: 14px; /* Decrease font size for small screens */
                }

                .btn-primary {
                    width: 100%; /* Make the button full-width on small screens */
                }
            }
        </style>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">UserID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Promote</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <input type="checkbox" name="promote_users[]" value="{{ $user->id }}" class="form-check-input">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div>
@endsection
