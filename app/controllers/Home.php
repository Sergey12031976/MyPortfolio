<?php
class Home extends Controller {
    public function index() {
        $products = $this->model('Istorija');

        $this->view('home/index', $products->getResultLimited("id", 6));
    }

}