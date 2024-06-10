<?php

namespace Admin\PhpOop1\Controllers\Client;

use Admin\PhpOop1\Commons\Controller;
use Admin\PhpOop1\Models\Product;

class HomeController extends Controller
{
    private Product $product;
    public function __construct(){
        $this->product = new Product();
    }
    public function index($page = 1) {
       [$products, $totalPages] = $this->product->paginate($page);
        $this->renderViewClient('home', [
            'products' => $products,
            'currentPage' => $page,
            'totalPages'=> $totalPages
        ]);
    }
}