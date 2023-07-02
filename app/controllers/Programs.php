<?php
class Programs extends Controller
{
    public function index($id)
    {
        $products = $this->model('Program');

        $this->view('programs/index', $products->getOneProgram($id));
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
            $link = $this->model('Program');
            $products = $this->model('Program');
            $data['programs'] = $link->getLink($_POST['title_id'], $_POST['email']);
            $data['programs'] = $cart->getSession();
            $data['programs'] = $products->getProgramCart($cart->getSession());
        }

        if (isset($_POST["BasketDelete"]))
             {
                $data['programs'] = $link->noneLink($_POST['email'], $_POST['title_id']);
                $cart->deleteSession();
                Header('Location: /hudeem/programs' . $_SERVER['PHP_SELF']);
            }
//        if(!isset($_COOKIE['log'])){
//            $cart->deleteSession();
//            Header('Location: /hudeem/programs' . $_SERVER['PHP_SELF']);
//            }
            $this->view('programs/payment', $data);

        }
    }
