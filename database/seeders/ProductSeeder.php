<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //each recorre cada producto, como si fuese un foreach
        Product::factory(20)->create()->each(function(Product $product){
            Image::factory(4)->create([
                'imageable_id'=>$product->id,
                'imageable_type'=> Product::class
            ]);
            Review::factory(5)->create([
                'product_id' => $product->id
            ]);
        });
    }
}
