<?php

namespace App\Repositories;

use App\Interfaces\UserInterfaces;
use App\Models\User;

class UserRepository implements UserInterfaces
{
    public function getAll()
    {
        return User::all();
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }

    public function updateUser(array $data, $id)
    {
        return User::where($id)
            ->update($data);
    }

    public function deleteUser($id)
    {
        return User::where($id)
            ->delete();
    }

    public function getUser($id)
    {
        return User::where('id_users', $id)->first();
    }
}
