<?php

namespace App\Repositories;

use App\Interfaces\CategoriesColorsInterfaces;
use App\Models\color_items;

class CategoriesColorsRepository implements CategoriesColorsInterfaces
{
    public function getAllColorsCategories()
    {
        return color_items::all();
    }
    public function createColorsCategories(array $data)
    {
        return color_items::create($data);
    }
    public function updateColorsCategories(array $data, $id)
    {
        return color_items::where('id_colos', $id)
            ->update($data);
    }
    public function deleteColorsCategories($id)
    {
        return color_items::where('id_colos', $id)
            ->delete();
    }
    public function getColorsCategories($id)
    {
        return color_items::where('id_colos', $id)
            ->first();
    }
}
