<?php

namespace App\Http\Livewire\Admin;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads; // para las imagenes

    public $image, $identificador;

    public $open = false;


    public $title;

    public $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'image' => 'required|image|max:2048'
    ];
    public function mount(){
        $this->identificador = rand();
    }

    public function render()
    {
        return view('livewire.admin.create-post')->layout('layouts.admin');
    }
    
    public function save(){

        $this->validate();

       $image = $this->image->store('posts');

        Posts::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $image,
        ]);

        $this->reset(['open','title','content', 'image']);
        $this->identificador = rand();

         $this->emitTo('admin.show-post','render');
        // $this->emit('alert', 'El post se creó satisfactoriamente');
    }
}
