<?php

namespace App\Repositories;

use App\Interfaces\CategoriesBrandsInterfaces;
use App\Models\BrandsItems;

class CategoriesBrandsRepository implements CategoriesBrandsInterfaces
{

    public function getAllBrandsCategories()
    {
        return BrandsItems::all();
    }
    public function createBrandsCategories(array $data)
    {
        return BrandsItems::create($data);
    }
    public function updateBrandsCategories(array $data, $id)
    {
        return BrandsItems::where('id_brands', $id)
            ->update($data);
    }
    public function deleteBrandsCategories($id)
    {
        return BrandsItems::where('id_brands', $id)
            ->delete();
    }
    public function getBrandsCategories($id)
    {
        return BrandsItems::where('id_brands', $id)
            ->first();
    }
}
