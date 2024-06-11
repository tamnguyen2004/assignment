@extends('layouts.master')

@section('title')
List category
@endsection

@section('content')
<div class="row justify-content-center mt-5">
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

                    <a href="{{ url("admin/categorys/create") }}" class="btn btn-primary">Thêm mới</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>                        
                                <th>NAME</th>
                               
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $category)
                            <tr>
                                <td>{{ $category['id'] }}</td>
                                <td>{{ $category['name'] }}</td>
                                
                                
                                
                                <td>
                                    <a href="{{ url("admin/categorys/{$category['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                                    <a href="{{ url("admin/categorys/{$category['id']}/delete") }}" onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
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
