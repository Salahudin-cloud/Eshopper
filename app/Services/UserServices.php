<?php

namespace App\Services;

use App\Interfaces\UserInterfaces;

class UserServices
{
    public function __construct(
        protected UserInterfaces $userRepository
    ) {}

    public function getAll()
    {
        return $this->userRepository->getAll();
    }

    public function createUser(array $data)
    {
        return $this->userRepository->createUser($data);
    }

    public function updateUser(array $data, $id)
    {
        return $this->userRepository->updateUser($data, $id);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->deleteUser($id);
    }
    public function getUser($id)
    {
        return $this->userRepository->getUser($id);
    }
}
