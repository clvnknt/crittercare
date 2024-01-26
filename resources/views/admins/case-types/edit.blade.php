@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Case Type</h1>

    <form method="POST" action="{{ route('admins.case-types.update', ['caseType' => $caseType]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $caseType->name }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select name="type" class="form-control">
                <option value="Dog" {{ $caseType->type == 'Dog' ? 'selected' : '' }}>Dog</option>
                <option value="Cat" {{ $caseType->type == 'Cat' ? 'selected' : '' }}>Cat</option>
                <option value="Others" {{ $caseType->type == 'Others' ? 'selected' : '' }}>Others</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Case Type</button>
    </form>
</div>
@endsection
