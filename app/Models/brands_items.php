<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands_items extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_brands',
        'brands_slug'
    ];
}
