<?php
class Stroiniashka extends Controller {
    public function consultant() {
        $data = [];
        if(isset($_POST['name'])) {
//            $topic = $this->model('Consultant');
            $message = $this->model('Consultant');
            $message->setData($_POST['name'], $_POST['email'], $_POST['message']);

            $isValid = $message->validForm();
            if($isValid == "Сообщение отправлено") {

                $data['message'] = $message->addMessage();
                $data['message']=$message->mail();
            }
            else
                $data['message'] = $isValid;
        }

        $this->view('user/dashboard', $data);
    }

    public function noprogram() {
        $this->view('user/dashboard');
    }


    public function econom() {
        $this->view('contact/about');
    }

    public function standart() {

        $dateControl = $this->model('Program');
        $dateControl -> programNull();
        $this->view('user/dashboard', $dateControl -> programNull());
    }

    public function super() {

        $dateControl = $this->model('Program');
        $dateControl -> programNull();
        $this->view('user/dashboard', $dateControl -> programNull());
    }

    public function myresult()
    {

        $data = [];

        if(isset($_POST['email'])) {
            $result = $this->model('WeightModel');
            $results = $this->model('WeightModel');
            $results->setData($_POST['email'], $_POST['date'], $_POST['weight'], $_POST['fat'], $_POST['visceral'], $_POST['bone'], $_POST['water'],
                $_POST['muscles'], $_POST['physical'], $_POST['metabolism'], $_POST['age'], $_POST['breast'],
                $_POST['waist'], $_POST['hips']);

            $isValid = $results->validForm();
            if($isValid == "Верно"){

                $results->addResult();
                $data['result']=$result->getResult();
            }

            else
                $data['message'] = $isValid;

        }

        $this->view('user/dashboard', $data);
    }

    public function dnevnik()
    {

        $data = [];

        if(isset($_POST['email'])) {
            $menu = $this->model('DnevnikModel');
            $outMenu = $this->model('DnevnikModel');
            $menu->setData($_POST['email'], $_POST['date'], $_POST['message']);

            $isValid = $menu->validForm();
            if($isValid == "Верно"){

                $menu->addMenu();
                $data['outMenu']=$outMenu->getMenu();
            }

            else
                $data['message'] = $isValid;

        }

        $this->view('user/dashboard', $data);
    }

}