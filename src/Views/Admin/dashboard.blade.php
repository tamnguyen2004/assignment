@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3>
                
            </div>
            <a href="#" class="white_btn3">Create Report</a>
        </div>
    </div>
</div>
<div class="row mt-5">
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h2 class="m-0">Tổng số sản phẩm:  {{ $totalProducts }}</h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
    <div class="col-lg-4 card_height_100 mb_20">
        <div class="white_card">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Total Sales Unit</h3>
                    </div>
                    <div class="header_more_tool">
                        <div class="dropdown">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body p-0">
                <div class="card_container">
                    <div id="platform_type_dates_donut" style="height:280px"></div>
                </div>
            </div>
        </div>
        <div class="sales_unit_footer d-flex justify-content-between">
            <div class="single_sales">
                <p>This Month Revenue</p>
                <h3>$57k</h3>
                <p class="d-flex align-items-center"> <i class="ti-arrow-up"></i> <span> 14.5%</span> Up From Last Month </p>
            </div>
            <div class="single_sales disable_sales">
                <p>This Month Revenue</p>
                <h3>$14k</h3>
                <p class="d-flex align-items-center"> <i class="ti-arrow-up"></i> <span> 14.5%</span> Up From Last Month </p>
            </div>
        </div>
    </div>
    
</div>
@endsection