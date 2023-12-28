<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Cliker extends Component
{
    public function createUser()
    {
        User::create([
            "name" => "test 2",
            "email" => "test1@gmail.com",
            "password" => "34343434",
        ]);
    }
    public function render()
    {
        $title = "Livewire";
        $users = User::all();
        return view(
            'livewire.cliker',
            [
                'title' => $title,
                'users' => $users
            ]
        );
    }
}
