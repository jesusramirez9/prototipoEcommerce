<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPost extends Component
{

        use WithPagination;

    public function render()
    {
        $posts = Posts::paginate(6);

        return view('livewire.show-post', compact('posts'));
    }
}
