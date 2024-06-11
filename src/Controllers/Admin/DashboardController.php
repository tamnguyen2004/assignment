<?php

namespace Admin\PhpOop1\Controllers\Admin;

use Admin\PhpOop1\Commons\Controller;
use Admin\PhpOop1\Models\Product; // Đảm bảo đã import model Product

class DashboardController extends Controller
{
    public function dashboard()
    {
        $productModel = new Product();
        $totalProducts = $productModel->countAll(); // Truy xuất tổng số sản phẩm
        $this->renderViewAdmin(__FUNCTION__, compact('totalProducts')); // Chuyển dữ liệu sang view
    }
}
