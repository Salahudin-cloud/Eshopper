<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandsItems extends Model
{
    use HasFactory;

   protected $table = "brand_items";


    protected $fillable = [
        'name_brands',
        'brands_slug'
    ];
}
