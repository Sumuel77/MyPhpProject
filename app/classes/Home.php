<?php


namespace App\classes;
use App\classes\Product;

class Home
{
    public function __construct()
    {
        session_start();
    }

    public $product, $products, $singleProduct;
    public function index()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('home', ['products' => $this->products]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("Location: web.php?page=home&&message=Invalid credential");
    }
    public function dashboard()
    {
        if (isset($_SESSION['id']))
    {
        return view('dashboard');
    }
        else
        {
            header("Location: web.php?page=login&&message=Please login first to access dashboard");
        }

    }
    public function detail($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                $this->singleProduct = $product;
            }
        }
        return view('detail', ['product' => $this->singleProduct]);
    }
}