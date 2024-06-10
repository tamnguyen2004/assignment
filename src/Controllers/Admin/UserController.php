<?php
namespace Admin\PhpOop1\Controllers\Admin;

use Admin\PhpOop1\Commons\Controller;
use Admin\PhpOop1\Models\User;
use Rakit\Validation\Validator;

class UserController extends Controller {
     private User $user;
     public function __construct() {
        $this->user = new User();
     }
     public function index()
    {
        $users = $this->user->all();
        $this->renderViewAdmin('users.index',['users'=> $users]);

    }
    public function create()
{
    // Lấy tất cả người dùng
    $users = $this->user->all();

    // Định nghĩa các loại người dùng sẵn có
    $userTypes = ['admin', 'member'];

    // Render view và truyền cả dữ liệu người dùng và các loại người dùng vào
    $this->renderViewAdmin('users.create', [
        'users' => $users,
        'userTypes' => $userTypes
    ]);
}

    public function delete($id)
    {
        try {
            $user = $this->user->findByID($id);

            $this->user->delete($id);

            if ($user['img_thumbnail'] && file_exists( PATH_ROOT . $user['img_thumbnail'] ) ) {
                unlink(PATH_ROOT . $user['img_thumbnail']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/users'));
        exit();
    }
    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            
            'name'                  => 'required',
            'email' => 'required|email|max:500',
            'password' => 'required|min:6',
            'type' => 'required',
            'avatar'         => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/users/create'));
            exit;
        } else {
            $data = [
                'name'          => $_POST['name'],
                'email'      => $_POST['email'],
                'type'       => $_POST['type'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            ];

            if (!empty($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {

                $from = $_FILES['avatar']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['avatar']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['avatar'] = $to;
                } else {
                    $_SESSION['errors']['avatar'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/users/create'));
                    exit;
                }
            }

            $this->user->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/users'));
            exit;
        }
    }
    
}