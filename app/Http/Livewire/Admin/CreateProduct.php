<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateProduct extends Component
{
    use LivewireAlert;
    
    public $categories, $subcategories = [], $brands = [];

    public $category_id = "", $subcategory_id ="", $brand_id = "";

    public $name, $slug, $code;
    public $description, $price, $quantity, $specification;
    public $offer = 0;

    protected $rules = [
        'category_id' => 'required',
        'subcategory_id' => 'required',
        'code' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:products',
        'description' => 'required',
        'brand_id' => 'required',
        'price' => 'required',
        'offer' => 'required',
        'specification' =>'required',

    ];

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get();

        $this->brands = Brand::whereHas('categories', function(Builder $query) use ($value){
            $query->where('category_id', $value);
        })->get();

        $this->reset(['subcategory_id', 'brand_id']);
    }

    public function updatedName($value){
        $this->slug = Str::slug($value);
    }

    // propiedad coomputada

    public function getSubcategoryProperty(){
        
        return Subcategory::find($this->subcategory_id);

    }

    public function mount(){
        $this->categories = Category::all();
    }

    public function save(){

        $rules = $this->rules;

        if ($this->subcategory_id) {
            if (!$this->SubCategory->color && !$this->SubCategory->size) {
               $rules['quantity'] = 'required';
            }
        }

        $this->validate($rules);

        $product = new Product();

        $product->code = $this->code;
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->specification = $this->specification;
        $product->price = $this->price;
        $product->offer = $this->offer;
        $product->subcategory_id = $this->subcategory_id;
        $product->brand_id = $this->brand_id;
       
        if ($this->subcategory_id) {
            if (!$this->SubCategory->color && !$this->SubCategory->size) {
                $product->quantity = $this->quantity;

            }
        }
        $product->save();
        $this->alert('success', 'Producto creado');

         return redirect()->route('admin.products.edit', $product);

    }

    public function render()
    {
       
        return view('livewire.admin.create-product')->layout('layouts.admin');
    }
}
