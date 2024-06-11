<?php
namespace Admin\PhpOop1\Controllers\Client;

use Admin\PhpOop1\Commons\Controller;
use Admin\PhpOop1\Commons\Helper;
use Admin\PhpOop1\Models\Category;
use Admin\PhpOop1\Models\Product;
use Rakit\Validation\Validator;

class ProductController extends Controller
{   
    private Product $product;


    public function __construct()
    {
        $this->product = new Product();
    
    }
    public function show($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewClient('show', [
            'product' => $product,
            
        ]);
    }
}