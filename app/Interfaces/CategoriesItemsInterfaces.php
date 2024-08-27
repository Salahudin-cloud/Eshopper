<?php

namespace App\Interfaces;

interface CategoriesItemsInterfaces
{
    public function getAllItemsCategories();
    public function createItemsCategories(array $data);
    public function updateItemsCategories(array $data, $id);
    public function deleteItemsCategories($id);
    public function getItemsCategories($id);
}
