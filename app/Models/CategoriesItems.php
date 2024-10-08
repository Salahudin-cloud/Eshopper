<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_name',
        'categories_slug'
    ];
}
