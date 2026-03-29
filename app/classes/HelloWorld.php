<?php


namespace App\classes;


class HelloWorld
{
    public $message, $data = [];

    public function __construct()
    {
        $this->message = "Hello PHP";
    }

    public function index()
    {
        return view('home');
    }
}