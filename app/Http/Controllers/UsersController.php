<?php

namespace App\Http\Controllers;

use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct(
        protected UserServices $userServices
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->userServices->getAll();
        return view('admin/users/index', ['users' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/users/addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation 
        $request->validate([
            'username' => 'bail|required|max:255',
            'password' => 'required|min:8'
        ]);

        // if pass validation
        // insert into database
        $user = $this->userServices->createUser([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'users'
        ]);

        // redirect to list username 
        return redirect()->to('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        $data = $this->userServices->getUser($id);
        return view('admin/users/updateUser', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
