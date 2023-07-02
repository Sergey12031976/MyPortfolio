<?php
class Forum extends Controller
{

    public function index()
    {
        $data = [];
        $user = $this->model('UserModel');
        $user->getUser();

        if (isset($_POST['name'])) {
            $message = $this->model('FormTopic');
            $message->setData($_POST['name'], $_POST['topic'], $_POST['message']);

            $isValid = $message->validForm();
            if ($isValid == "Сообщение отправлено")
                $data['message'] = $message->addMessage();
            else
                $data['message'] = $isValid;
        }

        $this->view('forum/index', $data );
    }
}