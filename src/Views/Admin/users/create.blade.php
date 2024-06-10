@extends('layouts.master')

@section('title')
List user
@endsection

@section('content')
@if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif
<form action="{{ url('admin/users/store') }}" enctype="multipart/form-data" method="POST">
    <div class="row">
        <div class="col-md-6">

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="avater" class="form-label">Avater:</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="password" class="form-label">Password:</label>
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 mt-3">
                <label for="type" class="form-label">Type:</label>

                <select name="type" class="form-control">
                    @foreach($userTypes as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>

@endsection