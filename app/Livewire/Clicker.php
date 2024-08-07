<?php

namespace App\Livewire;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use Livewire\Form;

class Clicker extends Component
{

    // #[Validate('required')]
    // public $name = '';

    // #[Validate('required')]
    // public $email = '';

    // #[Validate('required')]
    // public $password = '';



    public function createUser(){

        // $this->validate();

        // User::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'password' => $this->password,
        // ]);

        // session()->flash('success', 'User created successfully');

        // $this->reset();

    }

    public function handleClick(){
        return view('livewire.create-post');
    }

    public function render()
    {

        return view('livewire.clicker', [
            'users' => User::all(),
        ]);
    }
}
