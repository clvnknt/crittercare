@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1>Create Case Type</h1>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card custom-card bg-dark text-white">
                <div class="card-body">
                    <form method="POST" action="{{ route('admins.case-types.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select name="type" class="form-control">
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Case Type</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
