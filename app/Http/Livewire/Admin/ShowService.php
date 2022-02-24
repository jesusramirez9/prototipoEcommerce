<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowService extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $image, $identificador;
    public $open_edit = false;
    public $post;
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';
    public $cant = '10';
    public $readyToLoad = false;
    protected $listeners = ['render' => 'render', 'delete'];

    protected $queryString = [
        'cant' => ['except' => '10'],
        'sort' => ['except' => 'id'],
        'direction' => ['except' => 'desc'],
        'search' => ['except' => '']
    ];

    protected $rules = [
        'post.title' => 'required',
        'post.description' => 'required',
        'post.status' => 'required'
    ];

    public function mount()
    {
        $this->identificador = rand();
        $this->post = new Service();
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function order($sort)
    {

        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function edit(Service $post)
    {
        $this->post = $post;
        $this->open_edit = true;
    }
    public function update()
    {
        $this->validate();

        if ($this->image) {
            Storage::delete([$this->post->image]);
            $this->post->image = $this->image->store('posts');
        }

        $this->post->save();

        $this->reset(['open_edit', 'image']);

        $this->identificador = rand();
        $this->emit('alert', 'El post se actualizo satisfactoriamente');
    }
    
    public function render()
    {
        $posts = Service::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);

        return view('livewire.admin.show-service', compact('posts'))->layout('layouts.admin');
    }
    public function delete(Service $post)
    {
        $post->delete();
    }
}
