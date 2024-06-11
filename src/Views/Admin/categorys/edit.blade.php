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
<form action="{{ url("admin/categorys/{$category['id']}/update") }}" enctype="multipart/form-data" method="POST">
    <div class="col-lg-12 mt-5">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Edit category</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

                <form class="row g-3">
                    <div class="col-auto">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $category['name'] }}"><br>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</form>

@endsection