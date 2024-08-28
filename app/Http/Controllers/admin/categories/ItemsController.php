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
    public function show() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $dataItemCategories = $this->categoriesItemsServices->getItemsCategories($id);
        return view('admin/categories/items/updateItems', compact('dataItemCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate 
        $request->validate([
            'item'
        ]);

        // if pass 
        // update the data 
        $updateData = $this->categoriesItemsServices->updateItemsCategories([
            'categories_name' => $request->item,
            'categories_slug' => Str::slug($request->item)
        ], $id);

        // return 
        return redirect()->to('categories-item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //  
        $delete = $this->categoriesItemsServices->deleteItemsCategories($id);

        return redirect()->to('categories-item');
    }
}
