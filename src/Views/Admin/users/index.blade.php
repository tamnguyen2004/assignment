@extends('layouts.master')

@section('title')
List user
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Danh sách</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

                <div class="table-responsive">
                    @if (isset($_SESSION['status']) && $_SESSION['status'])
                    <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

                    @php
                    unset($_SESSION['status']);
                    unset($_SESSION['msg']);
                    @endphp
                    @endif

                    @if (isset($_SESSION['status']) && !$_SESSION['status'])
                    <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

                    @php
                    unset($_SESSION['status']);
                    unset($_SESSION['msg']);
                    @endphp
                    @endif

                    <a href="{{ url("admin/users/create") }}" class="btn btn-primary">Thêm mới</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>                        
                                <th>NAME</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Avatar</th>
                                <th>Type</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>{{ $user['password'] }}</td>
                                <td>
                                    <img src="{{ asset($user['avatar']) }}" width="100px" alt="">
                                </td>
                                <td>{{ $user['type'] }}</td>
                                <td>{{ $user['created_at'] }}</td>
                                <td>{{ $user['updated_at'] }}</td>
                                <td>
                                    <a href="{{ url("admin/users/{$user['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                                    <a href="{{ url("admin/users/{$user['id']}/delete") }}" onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
