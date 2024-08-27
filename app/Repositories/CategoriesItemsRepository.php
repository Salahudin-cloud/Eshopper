<?php

namespace App\Repositories;

use App\Interfaces\CategoriesItemsInterfaces;
use App\Models\categories_items;


class CategoriesItemsRepository implements CategoriesItemsInterfaces
{
    public function getAllItemsCategories()
    {
       return  categories_items::all();
    }


    public function createItemsCategories(array $data)
    {
       return  categories_items::create($data);
    }


    public function updateItemsCategories(array $data, $id)
    {
       return  categories_items::where('id_categories', $id)
            ->update($data);
    }

    public function deleteItemsCategories($id)
    {
       return  categories_items::where('id_categories', $id)
            ->delete();
    }


    public function getItemsCategories($id)
    {
       return  categories_items::where('id_categories', $id)->first();
    }
}
