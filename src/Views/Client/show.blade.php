<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    @include('layouts.partials.css')
</head>

<body>
    <!-- Navigation-->
    @include('layouts.partials.nav')
    <!-- Header-->
    @include('layouts.partials.header')
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @yield('content')
            </div>
            <div class="pagination">
                <style>
                    .pagination {
                        display: flex;
                        justify-content: center;
                        padding: 1rem 0;
                    }

                    .pagination a {
                        margin: 0 5px;
                        padding: 8px 16px;
                        text-decoration: none;
                        color: black;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                    }

                    .pagination a.active {
                        background-color: #007bff;
                        color: white;
                        border: 1px solid #007bff;
                    }

                    .pagination a:hover:not(.active) {
                        background-color: #ddd;
                    }
                </style>
                <!-- Pagination -->
                

    <style>
        .pro-detail {
            padding: 20px;
        }
        .pro-title {
            font-size: 24px;
            font-weight: bold;
        }
        .pro-price {
            font-size: 20px;
            color: red;
        }
        .text-muted {
            color: #6c757d !important;
        }
        .custom-border {
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
        }
        .add-to-cart-btn {
            background-color: #17a2b8;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .add-to-cart-btn:hover {
            background-color: #138f9c;
        }
        .pro-features {
            padding-left: 0;
        }
        .pro-features li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <img src="{{ asset($product['img_thumbnail']) }}" alt="{{ $product['name'] }}" class="mx-auto d-block sm_w_100" height="300" />
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="pro-detail">
                    <div class="custom-border mb-3"></div>
                    <h3 class="pro-title">{{ $product['name'] }}</h3>
                    <div class="d-flex align-items-center mb-2">
                        <span class="pro-price mr-2">${{ $product['price'] }}</span>
                        <span class="text-muted"><del>${{ $product['original_price'] }}</del> {{ $product['discount'] }}% Off</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <span class="badge badge-warning mr-1">4.5</span>
                        <span class="text-muted">({{ $product['reviews'] }} reviews)</span>
                    </div>
                    <p class="text-muted mb-0">{{ $product['overview'] }}</p>
                    
                    <h6 class="text-muted font_s_13 mt-3 mb-1">Features :</h6>
                    <ul class="list-unstyled pro-features border-0">
                        <li>{{ $product['content'] }}</li>
                        <!-- Thêm các tính năng khác của sản phẩm nếu cần -->
                    </ul>

                    <div class="form-group mt-3">
                        <label for="color">Color:</label>
                        <select id="color" class="form-control">
                            <option>White</option>
                            <option>Black</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" class="form-control" value="1" min="1">
                    </div>
                    <button class="btn add-to-cart-btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




            </div>
        </div>
    </section>
    <!-- Footer-->
    @include('layouts.partials.footer')
    <!-- Bootstrap core JS-->
    @include('layouts.partials.js')
</body>

</html>



