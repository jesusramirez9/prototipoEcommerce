<?php

namespace App\Http\Livewire;

use App\Models\Flayer;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowFlayer extends Component
{
    use WithPagination;
    use WithFileUploads; 
 
    public $clg = 'estoy aqui';
    public $image, $identificador;
    public $open_edit = true;
    public $close = 0;
    public $post;
    protected $listeners = ['render' => 'render', 'delete'];
    


    protected $rules = [
        'post.title' => 'required',
        'post.content' => 'required',
        'post.status' => 'required'
    ];  
 

    public function mount(){
        $this->post = new Flayer();
    }

    public function cerrar(){
        $this->open_edit = false;

    }

    public function render()
    {
        
        $posts = Flayer::where('status', 2)->get();
        $conteo = count($posts);
        if(count($posts) == 0){
            $this->open_edit = false;
        }

        return view('livewire.show-flayer', compact('posts','conteo'));
    }


}
