<?php


namespace App\Interfaces;


interface CategoriesColorsInterfaces
{
    public function getAllColorsCategories();
    public function createColorsCategories(array $data);
    public function updateColorsCategories(array $data, $id);
    public function deleteColorsCategories($id);
    public function getColorsCategories($id);
}
