<?php

namespace App\Services;

use App\Interfaces\CategoriesItemsInterfaces;

class CategoriesItemsServices
{

    public function __construct(
        protected CategoriesItemsInterfaces $categoriesItemsRepository
    ) {}


    public function getAllItemsCategories()
    {
        return $this->categoriesItemsRepository->getAllItemsCategories();
    }


    public function createItemsCategories(array $data)
    {
        return $this->categoriesItemsRepository->createItemsCategories($data);
    }


    public function updateItemsCategories(array $data, $id)
    {
        return $this->categoriesItemsRepository->updateItemsCategories($data, $id);
    }

    public function deleteItemsCategories($id)
    {
        return $this->categoriesItemsRepository->deleteItemsCategories($id);
    }


    public function getItemsCategories($id)
    {
        return $this->categoriesItemsRepository->getItemsCategories($id);
    }
}
