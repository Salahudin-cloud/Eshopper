<?php

namespace App\Repositories;

use App\Interfaces\CategoriesBrandsInterfaces;
use App\Models\brands_items;

class CategoriesBrandsRepository implements CategoriesBrandsInterfaces
{

    public function getAllBrandsCategories()
    {
        return brands_items::all();
    }
    public function createBrandsCategories(array $data)
    {
        return brands_items::create($data);
    }
    public function updateBrandsCategories(array $data, $id)
    {
        return brands_items::where('id_brands', $id)
            ->update($data);
    }
    public function deleteBrandsCategories($id)
    {
        return brands_items::where('id_brands', $id)
            ->delete();
    }
    public function getBrandsCategories($id)
    {
        return brands_items::where('id_brands', $id)
            ->first();
    }
}
