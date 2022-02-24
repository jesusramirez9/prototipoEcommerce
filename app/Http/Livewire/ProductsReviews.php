<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class ProductsReviews extends Component
{
    use LivewireAlert;
    public $product_id, $comment;

    public $rating=5;

    public function mount(Product $product){
        $this->product_id = $product->id;
    }
    public function render()
    {
        $product = Product::find($this->product_id);
        return view('livewire.products-reviews', compact('product'));
    }
    public function store(){
        
        $product = Product::find($this->product_id);
        $product->reviews()->create([
            'comment' => $this->comment,
            'rating' => $this->rating,
            'user_id' => auth()->user()->id
        ]);
        $this->alert('success', 'Comentario agregado');
        $this->comment = "";

    }

 
}
