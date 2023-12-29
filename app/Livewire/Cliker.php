<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Cliker extends Component
{
    use WithPagination;

    #[Rule('required|min:5|max:20')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';
    #[Rule('required|min:8')]
    public $password = '';
    public function createUser()
    {
        $this->validate();

        User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => $this->password,
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('success', 'User Create Successfully!!');
    }
    public function render()
    {

        $users = User::paginate(5);
        return view(
            'livewire.cliker',
            [

                'users' => $users
            ]
        );
    }
}
