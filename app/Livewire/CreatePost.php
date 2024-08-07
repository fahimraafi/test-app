<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Carbon;
use Livewire\Form;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;
use Validator;

class CreatePost extends Component
{
    use WithPagination;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $content = '';


    public function save(){

        $this->validate();

        Post::create([
            'name' => $this->name,
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->reset(['name', 'title', 'content']);

        session()->flash('success', 'Post created successfully!');

    }
    public function render()
    {

        return view('livewire.create-post', [
            'posts' => Post::paginate(10),
        ]);
    }
}
