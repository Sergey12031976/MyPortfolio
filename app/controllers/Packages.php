<?php
class Packages extends Controller
{

    public function index($id)
    {
        $data = $this->model('FamilyModel');

        $this->view('packages/index', $data->getOneProgram($id));
    }

    public function payment()
    {
        $data = [];
        $cart = $this->model('FamilyModel');

        if (isset($_POST['item_id']))
            $cart->addToCart($_POST['item_id']);

        if (!$cart->isSetSession())
            $data['empty'] = 'Пустая корзина';
        else {
            $link = $this->model('FamilyModel');
            $products = $this->model('FamilyModel');
            $data['package'] = $link->getLink($_POST['title_id'], $_POST['email']);
            $data['package'] = $cart->getSession();
            $data['package'] = $products->getProgramCart($cart->getSession());
        }

        if (isset($_POST["BasketDelete"]))
        {
            $data['package'] = $link->noneLink($_POST['email'], $_POST['title_id']);
            $cart->deleteSession();
            Header('Location: /packages/all' . $_SERVER['PHP_SELF']);
        }
//        if(!isset($_COOKIE['log'])){
//            $cart->deleteSession();
//            Header('Location: /hudeem/programs' . $_SERVER['PHP_SELF']);
//            }
        $this->view('packages/payment', $data);

    }
}