<?php
class Admin extends Controller
{
    public function adminauth()
    {
        $data = [];
        if (isset($_POST['email'])) {
            $user = $this->model('AdminModel');
            $data['message'] = $user->auth($_POST['email'], $_POST['pass']);
        }

        $this->view('admin/adminauth', $data);
    }

    public function index()
    {
        $user = $this->model('AdminModel');

        if (isset($_POST['exit_btn'])) {
            $user->logOut();
            exit();
        }

        $this->view('admin/index', $user->getUser());
    }

}