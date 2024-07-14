<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{

    public function createUser(){
        User::create([
            'name' => 'Raafi',
            'email' => 'a@b.com',
            'password' => '122333',
        ]);
    }

    public function handleClick(){
        dump('clicker');
    }

    public function render()
    {
        $title = 'Raafi';
        $users = User::all();

        return view('livewire.clicker',[
            'title' => $title,
            'users' => $users,
        ]);
    }
}
