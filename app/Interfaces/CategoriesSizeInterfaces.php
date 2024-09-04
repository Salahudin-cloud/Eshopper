<?php

namespace App\Interfaces;

interface CategoriesSizeInterfaces
{
    public function getAllSizeCategories();
    public function createSizeCategories(array $data);
    public function updateSizeCategories(array $data, $id);
    public function deleteSizeCategories($id);
    public function getSizeCategories($id);
}
