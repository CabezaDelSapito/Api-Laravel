<?php

namespace App\Services;
use App\Models\User;

class HelloWorldService
{
    public function get(): string
    {
        return User::get();
    }
}