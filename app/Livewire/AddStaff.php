<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Staff;

class AddStaff extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $email;

    #[Validate('required')]
    public $password;

    #[Validate('nullable|sometimes|image|max:1024')]
    public $image;

    public function save()
    {
        $this->validate();

        Staff::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);


    }


    public function render()
    {
        return view('livewire.add-staff');
    }
}
