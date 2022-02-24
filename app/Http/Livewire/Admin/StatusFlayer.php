<?php

namespace App\Http\Livewire\Admin;

use App\Models\Flayer;
use Livewire\Component;

class StatusFlayer extends Component
{
    public $flayer, $status;

    public function mount(){
        $this->status = new Flayer();
    }

    public function save(){
        $this->flayer->status = $this->status;
        $this->flayer->save();

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.admin.status-flayer');
    }
}
