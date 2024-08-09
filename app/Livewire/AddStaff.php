<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Staffs;
use Livewire\WithFileUploads;

class AddStaff extends Component
{
    use WithFileUploads;

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
        $validated = $this->validate();

        if($this->image){
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        Staffs::create($validated);

        $this->reset(['name', 'email', 'password']);


    }


    public function render()
    {
        return view('livewire.add-staff');
    }
}
