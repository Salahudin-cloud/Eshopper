<?php


namespace App\Interfaces;


interface CategoriesBrandsInterfaces
{
    public function getAllBrandsCategories();
    public function createBrandsCategories(array $data);
    public function updateBrandsCategories(array $data, $id);
    public function deleteBrandsCategories($id);
    public function getBrandsCategories($id);
}
