<?php

namespace Admin\PhpOop1\Controllers\Admin;

use Admin\PhpOop1\Commons\Controller;
use Admin\PhpOop1\Models\Category;
use Rakit\Validation\Validator;


class CategoryController extends Controller
{
    private Category $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $categorys = $this->category->all();
        $this->renderViewAdmin('categorys.index', ['categorys' => $categorys]);
    }
    public function create()
    {
        $categories = $this->category->all();

        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('categorys.create', [
            'categoryPluck' => $categoryPluck
        ]);
    }
    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [

            'name'                  => 'required|max:100',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/categorys/create'));
            exit;
        } else {
            $data = [

                'name'          => $_POST['name'],
            ];



            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/categorys'));
            exit;
        }
    }
    public function delete($id)
    {

        $category = $this->category->findByID($id);

        $this->category->delete($id);


        header('Location: ' . url('admin/categorys'));
        exit();
    }
    public function edit($id)
    {
        $category = $this->category->findByID($id);
        $categories = $this->category->all();

        $categoryPluck = array_column($categories, 'name', 'id');

        $this->renderViewAdmin('categorys.edit', [
            'categories' => $categories,
            'categoryPluck' => $categoryPluck,
            'category' => $category, // Thêm biến category để sử dụng trong form
        ]);
    }
    public function update($id)
    {
        $category = $this->category->findByID($id);

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [    
            'name'                  => 'required|max:100',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/categorys/$id/edit"));
            exit;
        } else {
            $data = [
                
                'name'          => $_POST['name'],
                
            ];

            $this->category->update($id, $data);


           

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/categorys/$id/edit"));
            exit;
        }
    }
}
