<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateService extends Component
{
    use WithFileUploads; // para las imagenes

    public $image, $identificador;
    public $status = 1;
    public $open = false;


    public $title;

    public $description;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image|max:2048',
        'status' => 'required'
    ];
    public function mount(){
        $this->identificador = rand();
    }

    public function render()
    {
        return view('livewire.admin.create-service')->layout('layouts.admin');
    }
    public function save(){

        $this->validate();

       $image = $this->image->store('posts');

        Service::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $image,
            'status' => $this->status
        ]);

        $this->reset(['open','title','description', 'image','status']);
        $this->identificador = rand();

         $this->emitTo('admin.show-service','render');
    }
}
