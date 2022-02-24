<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('subcategories');
        Storage::deleteDirectory('products');
        Storage::deleteDirectory('posts');
        Storage::deleteDirectory('flayers');
        Storage::deleteDirectory('services');

        Storage::makeDirectory('services');
        Storage::makeDirectory('flayers');
        Storage::makeDirectory('posts');
        Storage::makeDirectory('categories');
        Storage::makeDirectory('subcategories');
        Storage::makeDirectory('products');


        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);

        $this->call(SizeSeeder::class);

        $this->call(ColorSizeSeeder::class);
        
        $this->call(DepartmentSeeder::class);
        
        \App\Models\Posts::factory(10)->create();
        \App\Models\Flayer::factory(10)->create();
        \App\Models\Service::factory(15)->create();



    }
}
