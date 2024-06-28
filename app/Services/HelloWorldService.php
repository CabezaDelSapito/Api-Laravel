<?php

namespace App\Services;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class HelloWorldService
{
    public function get(): Collection
    {
        return User::get();
        //$users = User::all();
        // Constrói uma string com os nomes dos usuários
        // $userNames = $users->pluck('name')->implode(', ');
        // return "Lista de usuarios: " . $userNames;
    }
}

