<?php
class Smesiteli extends Controller {
    public function home() {
        $products = $this->model('Products');

        $this->view('smesiteli/home', $products->getProductsLimited("id", 6));
    }
}