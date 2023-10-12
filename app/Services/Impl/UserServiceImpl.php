<?php

namespace App\Services\Impl;

use App\Services\UserService;

class UserServiceImpl implements UserService
{
    private array $users = [
        "cahayoyo" => "rahasia"
    ];

    function login(string $user, string $password)
    {
        if(!isset($this->users[$user])){
            return false;
        }

        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}