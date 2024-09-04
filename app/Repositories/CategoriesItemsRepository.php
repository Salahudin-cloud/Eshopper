<?php

namespace App\Repositories;

use App\Interfaces\CategoriesItemsInterfaces;
use App\Models\CategoriesItems;


class CategoriesItemsRepository implements CategoriesItemsInterfaces
{
    public function getAllItemsCategories()
    {
       return  CategoriesItems::all();
    }


    public function createItemsCategories(array $data)
    {
       return  CategoriesItems::create($data);
    }


    public function updateItemsCategories(array $data, $id)
    {
       return  CategoriesItems::where('id_categories', $id)
            ->update($data);
    }

    public function deleteItemsCategories($id)
    {
       return  CategoriesItems::where('id_categories', $id)
            ->delete();
    }


    public function getItemsCategories($id)
    {
       return  CategoriesItems::where('id_categories', $id)->first();
    }
}
