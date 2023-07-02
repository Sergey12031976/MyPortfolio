<?php
class Categories extends Controller {
    public function index() {
        $products = $this->model('Products');
        $data = ['products' => $products->getProducts(), 'title' => 'Все товары'];
        $this->view('categories/index', $data);
    }

    public function kitchen() {
        $products = $this->model('Products');
        $data = ['products' => $products->getProductsCategory('kitchen'), 'title' => 'Смесители для кухни'];
        $this->view('categories/index', $data);
    }

    public function bath() {
        $products = $this->model('Products');
        $data = ['products' => $products->getProductsCategory('bath'), 'title' => 'Смесители для ванны'];
        $this->view('categories/index', $data);
    }

    public function washbasin() {
        $products = $this->model('Products');
        $data = ['products' => $products->getProductsCategory('washbasin'), 'title' => 'Смесители для умывальника'];
        $this->view('categories/index', $data);
    }

    public function shower() {
        $products = $this->model('Products');
        $data = ['products' => $products->getProductsCategory('shower'), 'title' => 'Смесители для душевых кабин'];
        $this->view('categories/index', $data);
    }

    public function bonus() {
        $products = $this->model('Products');
        $data = ['products' => $products->getProductsCategory('bonus'), 'title' => 'Отзывы'];
        $this->view('categories/index', $data);
    }

//    public function cooperation() {
//        $products = $this->model('Products');
//        $data = ['products' => $products->getProductsCategory('cooperation'), 'title' => 'Сотрудничество'];
//        $this->view('categories/index', $data);
//    }
}