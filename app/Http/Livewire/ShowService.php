<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ShowService extends Component
{
    use WithPagination;

    public function render()
    {
        $services = Service::where('status', 2)->paginate(4);

        return view('livewire.show-service', compact('services'));
    }
}
