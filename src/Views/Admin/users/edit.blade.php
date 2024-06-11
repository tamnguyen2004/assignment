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
<form action="{{ url("admin/users/{$user['id']}/update") }}" enctype="multipart/form-data" method="POST">
    <div class="row">
        <div class="col-md-6">

            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" value="{{ $user['name'] }}" placeholder="Enter name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="avater" class="form-label">Avater:</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
                <img src="{{ asset($user['avatar']) }}" width="100px" alt="">

            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control"value="{{ $user['email'] }}" id="email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="password" class="form-label">Password:</label>
                <input type="text" class="form-control"value="{{ $user['password'] }}" id="password" name="password">
            </div>
            
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>

@endsection