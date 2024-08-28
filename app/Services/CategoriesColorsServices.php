<?php

namespace App\Services;

use App\Interfaces\CategoriesColorsInterfaces;


class CategoriesColorsServices
{
    public function __construct(
        protected CategoriesColorsInterfaces $categoriesColorsRepository
    ) {}

    public function getAllColorsCategories()
    {
        return  $this->categoriesColorsRepository->getAllColorsCategories();
    }
    public function createColorsCategories(array $data)
    {
        return  $this->categoriesColorsRepository->createColorsCategories($data);
    }
    public function updateColorsCategories(array $data, $id)
    {
        return  $this->categoriesColorsRepository->updateColorsCategories($data, $id);
    }
    public function deleteColorsCategories($id)
    {
        return  $this->categoriesColorsRepository->deleteColorsCategories($id);
    }
    public function getColorsCategories($id)
    {
        return  $this->categoriesColorsRepository->getColorsCategories($id);
    }
}
