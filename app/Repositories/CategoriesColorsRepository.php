<?php

namespace App\Repositories;

use App\Interfaces\CategoriesColorsInterfaces;
use App\Models\ColorItems;

class CategoriesColorsRepository implements CategoriesColorsInterfaces
{
    public function getAllColorsCategories()
    {
        return ColorItems::all();
    }
    public function createColorsCategories(array $data)
    {
        return ColorItems::create($data);
    }
    public function updateColorsCategories(array $data, $id)
    {
        return ColorItems::where('id_colos', $id)
            ->update($data);
    }
    public function deleteColorsCategories($id)
    {
        return ColorItems::where('id_colos', $id)
            ->delete();
    }
    public function getColorsCategories($id)
    {
        return ColorItems::where('id_colos', $id)
            ->first();
    }
}
