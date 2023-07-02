<?php
class Family extends Controller
{
    public function index(){

        $this->view('family/index');
    }

    public function book(){

        $this->view('family/book');
    }

    public function author(){

        $this->view('family/author');
    }

    public function introduction(){

        $this->view('family/introduction');
    }

    public function glava_1(){

        $this->view('family/glava_1');
    }

    public function glava_2(){

        $this->view('family/glava_2');
    }

    public function glava_3(){

        $this->view('family/glava_3');
    }

    public function glava_4(){

        $this->view('family/glava_4');
    }

    public function glava_5(){

        $this->view('family/glava_5');
    }

    public function glava_6(){

        $this->view('family/glava_6');
    }

    public function glava_7(){

        $this->view('family/glava_7');
    }

    public function glava_8(){

        $this->view('family/glava_8');
    }

    public function glava_9(){

        $this->view('family/glava_9');
    }

    public function glava_10(){

        $this->view('family/glava_10');
    }

    public function conclusion(){

        $this->view('family/conclusion');
    }

    public function reg()
    {

        $data = [];

        if (isset($_POST['name'])) {
            $user = $this->model('FamilyModel');
            $user->setData($_POST['name'], $_POST['email'], $_POST['fone'], $_POST['pass'], $_POST['re_pass']);
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

        $this->view('family/reg', $data);
    }

    public function auth()
    {

        $data = [];
        if (isset($_POST['email'])) {
            $user = $this->model('FamilyModel');
            $data['message'] = $user->auth($_POST['email'], $_POST['pass']);
        }

        $this->view('family/auth', $data);
    }

    public function reeder()
    {
        $user = $this->model('FamilyModel');

        if (isset($_POST['exit_btn'])) {
            $user->logOut();
            exit();
        }

        $this->view('family/reeder', $user->getUser());
    }

    public function packages()
    {
        $products = $this->model('FamilyModel');

        $this->view('family/packages', $products->getProgramLimited("id", 3));
    }

    public function payment()
    {
        $data = [];
        $cart = $this->model('PaymentProgram');

        if (isset($_POST['item_id']))
            $cart->addToCart($_POST['item_id']);

        if (!$cart->isSetSession())
            $data['empty'] = 'Пустая корзина';
        else {
            $link = $this->model('FamilyModel');
            $products = $this->model('FamilyModel');
            $data['package'] = $link->getLinks($_POST['title_id'], $_POST['email']);
            $data['package'] = $cart->getSession();
            $data['package'] = $products->getProgramCart($cart->getSession());
        }

        if (isset($_POST["BasketDelete"]))
        {
            $data['package'] = $link->noneLink($_POST['email'], $_POST['title_id']);
            $cart->deleteSession();
            Header('Location: /family/packages' . $_SERVER['PHP_SELF']);
        }
//        if(!isset($_COOKIE['log'])){
//            $cart->deleteSession();
//            Header('Location: /hudeem/programs' . $_SERVER['PHP_SELF']);
//            }
        $this->view('family/payment', $data);

    }

    public function ok() {


//            $program = $this->model('PaymentProgram');
////        $data['programs'] = $program->getProgram();
////        $data['user'] = $user->dataUser();

        $data = [];
//        $user = $this->model('UserModel');
        $cart = $this->model('PaymentProgram');
//        $tiket = $this->model('Program');
//
//        $data['user'] = $user->getLink();
        if (isset($_POST["BasketDelete"]))
        {
//            $tiket->setTiket();
//            $tiket->getTiket($_POST['email']);
            $cart->deleteSession();

            Header('Location: /family/reeder' . $_SERVER['PHP_SELF']);
        }

        $this->view('family/ok');
    }

    public function freeConsult() {
        $data = [];
        if(isset($_POST['name'])) {

            $mail = $this->model('FamilyConsult');
            $mail->setData($_POST['name'], $_POST['fone'], $_POST['email'], $_POST['message']);


            $isValid = $mail->validForm();
            if($isValid == "Верно"){
                $mail -> addFreeConsult();
                $data['message'] = $mail->mail();}
            else
                $data['message'] = $isValid;
        }

        $this->view('family/freeConsult', $data);
    }

}