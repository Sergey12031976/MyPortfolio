<?php
class Remont extends Controller
{
    public function master(){

        $data = [];
        $mail = $this->model('RemontModel');
        if(isset($_POST['name'])) {

            $mail->setData($_POST['name'], $_POST['email'], $_POST['fone'], $_POST['message']);

            $isValid = $mail->validForm();
            if($isValid == "Верно")
                $data['message'] = $mail->mail();
            else
                $data['message'] = $isValid;
        }
        $data['outFeedback']=$mail->getFeedback();
        $this->view('remont/master', $data);
    }

    public function otziv(){

        $data = [];
        if(isset($_POST['client'])) {
            $mail = $this->model('FeedbackModel');
            $mail->setData($_POST['client'], $_POST['message']);

            $isValid = $mail->validForm();
            if($isValid == "Верно")
                $data['message']=$mail->addFeedback();
            else
                $data['message'] = $isValid;
        }

        $this->view('remont/otziv', $data);
    }

}