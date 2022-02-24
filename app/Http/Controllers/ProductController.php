<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function show(Product $product, Subcategory $subcategory){

        $subcategories = Subcategory::all();

        return view('products.show', compact('product','subcategories'));
    }
}
