<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'price',
        'description',
        'in_stock',
        'seller_id',
        'shop_id'
    ];

}

