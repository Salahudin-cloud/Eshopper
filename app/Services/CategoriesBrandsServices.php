<?php

namespace App\Services;

use App\Interfaces\CategoriesBrandsInterfaces;

class CategoriesBrandsServices
{
    public function __construct(
        protected CategoriesBrandsInterfaces $categoriesBrandsRepository
    ) {}

    public function getAllBrandsCategories()
    {
        return $this->categoriesBrandsRepository->getAllBrandsCategories();
    }
    public function createBrandsCategories(array $data)
    {
        return $this->categoriesBrandsRepository->createBrandsCategories($data);
    }
    public function updateBrandsCategories(array $data, $id)
    {
        return $this->categoriesBrandsRepository->updateBrandsCategories($data, $id);
    }
    public function deleteBrandsCategories($id)
    {
        return $this->categoriesBrandsRepository->deleteBrandsCategories($id);
    }
    public function getBrandsCategories($id)
    {
        return $this->categoriesBrandsRepository->getBrandsCategories($id);
    }
}
