<?php


namespace App\classes;


class Product
{
    public $products = [];
    public function __construct()
    {
        $this->products = [
            0 => [
                'id'          => 1,
                'name'        => 'New Smart T Shirt',
                'price'       => '2000',
                'description' => 'Product Description',
                'image'       => 'assets/img/shop_01.jpg'
            ],
            1 => [
                'id'          => 2,
                'name'        => 'New Fashionable sharee',
                'price'       => '2000',
                'description' => 'Product Description',
                'image'       => 'assets/img/shop_02.jpg'
            ],
            2 => [
                'id'          => 3,
                'name'        => 'New Hoodie',
                'price'       => '2000',
                'description' => 'Product Description',
                'image'       => 'assets/img/shop_03.jpg'
            ],
            3 => [
                'id'          => 4,
                'name'        => 'New jacket',
                'price'       => '2000',
                'description' => 'Product Description',
                'image'       => 'assets/img/shop_04.jpg'
            ],
            4 => [
                'id'          => 5,
                'name'        => 'New jacket',
                'price'       => '2000',
                'description' => 'Product Description',
                'image'       => 'assets/img/shop_05.jpg'
            ],
            5 => [
                'id'          => 6,
                'name'        => 'New jacket',
                'price'       => '2000',
                'description' => 'Product Description',
                'image'       => 'assets/img/shop_06.jpg'
            ],

        ];
    }
    public function getAllProduct()
    {
        return $this->products;
    }
}