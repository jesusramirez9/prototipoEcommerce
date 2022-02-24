<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\ColorSize;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category, $subcategoria, $marca, $talla, $color, $precio;
    public $view = 'grid';

    protected $queryString = ['subcategoria', 'marca', 'talla', 'page', 'color', 'precio'];

    protected   $preciomin = 0, $preciomax = 0;

    public function render()
    {
        $tipoconsulta = 1;

        $colors_product = Color::all();
        $talla_product = DB::table('sizes')->select('name')->groupBy('name')->get();
        $precio_product = [
            [
                'id' => 1,
                'min' => 0,
                'max' => 50,
            ],
            [
                'id' => 2,
                'min' => 50,
                'max' => 100,
            ],
            [
                'id' => 3,
                'min' => 100,
                'max' => 150,
            ],
            [
                'id' => 4,
                'min' => 150,
                'max' => 200,
            ]
        ];

      

        if ($this->precio != null) {
            # code...
            foreach ($precio_product as $itemp) {
                if ($itemp['id'] == $this->precio) {
                    $this->preciomin = $itemp['min'];
                    $this->preciomax = $itemp['max'];
                }
            }
        }

        // $products = $this->category->products()->where('status',2)->paginate(20);

        $productsQuery = Product::query()->whereHas('subcategory.category', function (Builder $query) {
            if($this->preciomin == 0 && $this->preciomax == 0){
                $query->where('id', $this->category->id);
            }else{
                $query->where('id', $this->category->id)->whereBetween('price', [$this->preciomin, $this->preciomax]);
            }
          
        });
        

        if ($this->subcategoria) {
            # code...
            $productsQuery =  $productsQuery->whereHas('subcategory', function (Builder $query) {
                $query->where('slug', $this->subcategoria);
            });
        }

        if ($this->marca) {
            $productsQuery =  $productsQuery->whereHas('brand', function (Builder $query) {
                $query->where('name', $this->marca);
            });
        }

        if ($this->talla) {

            $productsQuery =  $productsQuery->whereHas('sizes', function (Builder $query) {
                $query->where('name', $this->talla);
            });
        }

        if ($this->color) {

            $productsQuery =  $productsQuery->whereHas('sizes.colorsizes', function (Builder $query) {
                $query->where('color_id', $this->color);
            });
        }

        $products = $productsQuery->where('status', 2)->paginate(12);

        return view('livewire.category-filter', compact('products', 'colors_product', 'talla_product', 'precio_product'));
    }
    public function limpiar()
    {
        $this->reset(['subcategoria', 'marca', 'talla', 'color', 'precio']);
    }

    public function updatedSubcategoria()
    {
        $this->resetPage();
    }

    public function updatedMarca()
    {
        $this->resetPage();
    }
    public function updatedColor()
    {
        $this->resetPage();
    }
    public function updatedPrecio()
    {
        $this->resetPage();
    }
}
