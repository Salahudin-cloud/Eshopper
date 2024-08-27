<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Services\CategoriesItemsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItemsController extends Controller
{

    public function __construct(
        protected CategoriesItemsServices $categoriesItemsServices
    ) {}


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dataCategories = $this->categoriesItemsServices->getAllItemsCategories();
        return view('admin/categories/items/index', compact('dataCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/categories/items/addItems');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate 
        $request->validate([
            'item' =>  'required',
        ]);

        // if passed 
        $newItems = $this->categoriesItemsServices->createItemsCategories([
            'categories_name' => $request->item,
            'categories_slug' => Str::slug($request->item)
        ]);

        return redirect()->to('categories-item');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin/categories/items/updateItems');
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
