<?php

namespace App\Interfaces;

interface UserInterfaces
{
    //
    public function getAll(); 
    public function createUser(array $data); 
    public function updateUser(array $data, $id); 
    public function deleteUser($id); 
    public function getUser($id); 
}
