<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Services\CategoriesSizeServices;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function __construct(
        protected CategoriesSizeServices $categoriesSizeServices
    ) {}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->categoriesSizeServices->getAllSizeCategories();
        return view('admin/categories/size/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/categories/size/addSize');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('admin/categories/size/updateSize');
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
