<?php

class User extends Controller
{

    public function reg()
    {

        $data = [];

        if (isset($_POST['name'])) {
            $user = $this->model('UserModel');
            $user->setData($_POST['name'], $_POST['email'], $_POST['fone'], $_POST['link'], $_POST['date'], $_POST['pass'], $_POST['re_pass']);
//            $mess = $this->model('UserModel');
//            $mess->setData($_POST['name'], $_POST['email']);

            $isValid = $user->validForm();
            if ($isValid == "Верно"){
                $user->addUser();
                $data['mess']=$user->mail();
            }
            else
                $data['message'] = $isValid;
        }

        $this->view('user/reg', $data);
    }

    public function dashboard()
    {
        $user = $this->model('UserModel');

        if (isset($_POST['exit_btn'])) {
            $user->logOut();
            exit();
        }

        $this->view('user/dashboard', $user->getUser());
    }

    public function auth()
    {

        $data = [];
        if (isset($_POST['email'])) {
            $user = $this->model('UserModel');
            $data['message'] = $user->auth($_POST['email'], $_POST['pass']);
        }

        $this->view('user/auth', $data);
    }

    public function myresult()
    {
        $data = [];

            $user = $this->model('ResultModel');

            $data['user'] = $user->getResult($_COOKIE['log']);


        $this->view('user/myresult', $data);
    }

    public function ok() {


//            $program = $this->model('PaymentProgram');
////        $data['programs'] = $program->getProgram();
////        $data['user'] = $user->dataUser();

        $data = [];
//        $user = $this->model('UserModel');
        $cart = $this->model('PaymentProgram');
        $tiket = $this->model('Program');
//
//        $data['user'] = $user->getLink();
        if (isset($_POST["BasketDelete"]))
        {
//            $tiket->setTiket();
//            $tiket->getTiket($_POST['email']);
            $cart->deleteSession();

            Header('Location: /user/dashboard' . $_SERVER['PHP_SELF']);
        }

        $this->view('user/ok');
    }

    public function dnevnik()
    {

        $data = [];
        $menu = $this->model('DnevnikModel');
        if(isset($_POST['email'])) {

            $menu->setData($_POST['email'], $_POST['date'], $_POST['message']);

            $isValid = $menu->validForm();
            if($isValid == "Верно"){

                $menu->addMenu();

            }

            else
                $data['message'] = $isValid;

        }
        $data['outMenu']=$menu->getMenu($_COOKIE['log']);
        $this->view('user/dnevnik', $data);
    }

    public function menu()
    {

        $data = [];

        if(isset($_POST['date'])) {

            $menu = $this->model('MenuModel');
            $menu->setData($_POST['date']);

            $isValid = $menu->validForm();
            if($isValid == "Верно"){

            $menu->getMenu($_COOKIE['log']);
            $data['menu']=$menu->getMenu($_COOKIE['log']);
            }

            else
                $data['message'] = $isValid;

        }

        $this->view('user/menu', $data);
    }

}