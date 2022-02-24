<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flayer extends Model
{
    use HasFactory;

    protected $fillable=['title','description', 'image'];

    const BORRADOR = 1;
    const PUBLICADO = 2;
    
}
