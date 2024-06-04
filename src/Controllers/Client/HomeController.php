<?php

namespace Admin\PhpOop1\Controllers\Client;

use Admin\PhpOop1\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'Tamnd';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}