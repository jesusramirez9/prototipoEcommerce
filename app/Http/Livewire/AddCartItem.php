<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddCartItem extends Component
{
    use LivewireAlert;
    public $product;
    public $qty=1;
    public $quantity;
    public $options = [
        'color_id' => null,
        'size_id' => null
    ];

    public function decrement(){
        $this->qty = $this->qty - 1;
    }
    public function increment(){
        $this->qty = $this->qty + 1;
    }

    public function mount(){
        $this->quantity = qty_available($this->product->id);
        $this->options['image'] = Storage::url($this->product->images->first()->url);
    }
    public function addItem(){
        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'qty' => $this->qty,
            'price' => $this->product->price,
            'weight' => 550,
            'options' => $this->options
        ]);

        $this->quantity = qty_available($this->product->id);
        $this->alert('success', 'Producto agregado');
        $this->reset('qty');

        $this->emitTo('dropdown-cart','render');
    }
    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
