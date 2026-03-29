<?php

namespace App\classes;

class User
{
    public $users = [];

    public function __construct()
    {
        $this->users = [
            0 => [
                'id'        => '1',
                'user_name' => 'sumu',
                'password'  => '1234'
            ],
            1 => [
                'id'        => '2',
                'user_name' => 'zoro',
                'password'  => '5678'
            ],
        ];
    }
    public function getAllUser()
    {
        return $this->users;
    }

}