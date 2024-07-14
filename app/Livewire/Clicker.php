<?php

namespace App\Livewire;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Clicker extends Component
{
    public $users;

    public $name;
    public $email;
    public $password;  

    

    public function createUser(){
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }

    public function handleClick(){
        dump('clicker');
    }

    public function render()
    {
        $users = Auth::user();   
        return view('livewire.clicker', [
            'users' => $users,
        ]);
    }
}
