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
                <div class="pagination">
                    @if ($currentPage > 1)
                    <a href="{{ url('/page/' . ($currentPage - 1)) }}">&laquo; Previous</a>
                    @endif

                    @for ($i = 1; $i <= $totalPages; $i++) <a href="{{ url('/page/' . $i) }}" class="{{ $i == $currentPage ? 'active' : '' }}">{{ $i }}</a>
                        @endfor

                        @if ($currentPage < $totalPages) <a href="{{ url('/page/' . ($currentPage + 1)) }}">Next &raquo;</a>
                            @endif
                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    @include('layouts.partials.footer')
    <!-- Bootstrap core JS-->
    @include('layouts.partials.js')
</body>

</html>