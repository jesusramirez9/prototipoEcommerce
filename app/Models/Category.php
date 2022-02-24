<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name','slug','image','icon'];

    // relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    // relacion muchos a muchos

    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //relacion entre categoria y productos

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    use HasFactory;

    // URL AMIGABLE

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
