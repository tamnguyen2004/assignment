<?php

namespace Admin\PhpOop1\Controllers\Admin;

use Admin\PhpOop1\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
