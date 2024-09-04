<?php

namespace App\Repositories;

use App\Interfaces\CategoriesSizeInterfaces;
use App\Models\SizeItems;

class CategoriesSizeRepository implements CategoriesSizeInterfaces
{

    public function getAllSizeCategories()
    {
        return SizeItems::all();
    }
    public function createSizeCategories(array $data)
    {
        return SizeItems::create($data);
    }
    public function updateSizeCategories(array $data, $id)
    {
        return SizeItems::where('id_size', $id)
            ->update($data);
    }
    public function deleteSizeCategories($id)
    {
        return SizeItems::where('id_size', $id)
            ->delete();
    }
    public function getSizeCategories($id)
    {
        return SizeItems::where('id_size', $id)
            ->first();
    }
}
