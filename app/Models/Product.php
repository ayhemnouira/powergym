<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Ayhem

    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
