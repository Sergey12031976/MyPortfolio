<?php
class Hudeem extends Controller {
    public function index() {
        $products = $this->model('Istorija');

        $this->view('hudeem/index', $products->getResultLimited("id", 6));
    }

    public function programs() {
        $products = $this->model('Program');

        $this->view('hudeem/programs', $products->getProgramLimited("id", 6));
    }

    public function freeConsult() {
        $data = [];
        if(isset($_POST['name'])) {

            $mail = $this->model('ConsultModel');
            $mail->setData($_POST['name'], $_POST['fone'], $_POST['email'], $_POST['message']);


            $isValid = $mail->validForm();
            if($isValid == "Верно"){
                $mail -> addFreeConsult();
                $data['message'] = $mail->mail();}
            else
                $data['message'] = $isValid;
        }

        $this->view('hudeem/freeConsult', $data);
    }

    public function video() {
        $video = $this->model('VideoModel');
        $this->view('hudeem/video', $video->getVideoLimited("id", 12));
    }


    public function error() {

        $cart = $this->model('PaymentProgram');
        if (isset($_POST["BasketDelete"]))
        {
            $cart->deleteSession();
            Header('Location: /hudeem/programs' . $_SERVER['PHP_SELF']);
        }
        $this->view('hudeem/error');
    }

    public function history(){
        $products = $this->model('Istorija');


        $this->view('hudeem/history', $products->getResultLimited("id", 100));
    }

    public function about(){

        $this->view('hudeem/about');
    }

    public function menu(){

        $this->view('hudeem/menu');
    }

}