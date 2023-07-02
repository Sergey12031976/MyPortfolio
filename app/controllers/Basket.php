<?php
class Basket extends Controller
{

    public function order()
    {
        $data = [];
//        $cart = $this->model('BasketModel');

        if (isset($_POST['fone'])) {
            $user = $this->model('PayModel');
            $user->setData($_POST['fone'], $_POST['addres'], $_POST['email']);

            $isValid = $user->validForm();
            if ($isValid == "Верно") {
                $user->addOrder();
            }
            else
                $data['message'] = $isValid;
        }

//        if (isset($_POST['item_id']))
//
//            $cart->addToCart($_POST['item_id']);
//
//        if (!$cart->isSetSession())
//            $data['empty'] = 'Пустая корзина';
//        else {
//            $products = $this->model('Products');
//            $data['products'] = $cart->getSession();
//            $data['products'] = $products->getProductsCart($cart->getSession());
//        }

     $this->view('basket/order', $data);
    }

    public function index()
    {
        $data = [];
        $cart = $this->model('BasketModel');

        if (isset($_POST['item_id']))
            $cart->addToCart($_POST['item_id']);

        if (!$cart->isSetSession())
            $data['empty'] = 'Пустая корзина';
        else {
            $products = $this->model('Products');
            $data['products'] = $products->getProductsCart($cart->getSession());
        }

        if (isset($_POST["BasketDelete"])){
            if ($_POST["BasketDelete"]) {
                $cart->deleteSession();
                Header('Location: ' . $_SERVER['PHP_SELF']);
            }
        }

        $this->view('basket/index', $data);

    }

    public function payment()
    {
        $data = [];
        $cart = $this->model('BasketModel');

        if (isset($_POST['item_id']))
            $cart->addToCart($_POST['item_id']);

        if (!$cart->isSetSession())
            $data['empty'] = 'Пустая корзина';
        else {
            $products = $this->model('Products');
            $data['products'] = $cart->getSession();
            $data['products'] = $products->getProductsCart($cart->getSession());
        }

        $this->view('basket/payment', $data);

    }

}
