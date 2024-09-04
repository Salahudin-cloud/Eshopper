<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Services\CategoriesBrandsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{

    public function __construct(
        protected CategoriesBrandsServices $categoriesBrandsServices
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = $this->categoriesBrandsServices->getAllBrandsCategories();
        return view('admin/categories/brand/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/categories/brand/addBrand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validate the input 
        $request->validate([
            'brand' => 'required'
        ]);

        // if passed 
        // insert into the storage database
        $user = $this->categoriesBrandsServices->createBrandsCategories([
            'name_brands' => $request->brand,
            'brands_slug' => Str::slug($request->brand)
        ]);

        // redirect 
        return redirect()->to('brand-item');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $data = $this->categoriesBrandsServices->getBrandsCategories($id);
        return view('admin/categories/brand/updateBrand', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //validate 
        $request->validate([
            'brand' => 'required',
        ]);

        // if passed
        $newBrand = $this->categoriesBrandsServices->updateBrandsCategories([
            'name_brands' => $request->brand,
            'brands_slug' => Str::slug($request->brand)
        ], $id);
        return redirect()->to('brand-item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $deleteBrand = $this->categoriesBrandsServices->deleteBrandsCategories($id);

        return redirect()->to('brand-item');
    }
}
