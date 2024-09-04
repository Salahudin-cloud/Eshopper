<?php


namespace App\Services;

use App\Interfaces\CategoriesSizeInterfaces;

class CategoriesSizeServices
{
    public function __construct(
        protected CategoriesSizeInterfaces $categoriesSizeService
    ) {}
    public function getAllSizeCategories()
    {
        return $this->categoriesSizeService->getAllSizeCategories();
    }
    public function createSizeCategories(array $data)
    {
        return $this->categoriesSizeService->createSizeCategories($data);
    }
    public function updateSizeCategories(array $data, $id)
    {
        return $this->categoriesSizeService->updateSizeCategories($data, $id);
    }
    public function deleteSizeCategories($id)
    {
        return $this->categoriesSizeService->deleteSizeCategories($id);
    }
    public function getSizeCategories($id)
    {
        return $this->categoriesSizeService->getSizeCategories($id);
    }
}
