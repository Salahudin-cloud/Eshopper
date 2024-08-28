<?php

namespace App\Http\Controllers\admin\categories;

use App\Http\Controllers\Controller;
use App\Services\CategoriesColorsServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ColorsController extends Controller
{

    public function __construct(
        protected CategoriesColorsServices $categoriesColorsServices
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all colors 
        $dataColors = $this->categoriesColorsServices->getAllColorsCategories();
        return view('admin/categories/colors/index', compact('dataColors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin/categories/colors/addColors');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the input 
        $request->validate([
            'color' => 'required'
        ]);

        // if passed 
        // insert into the storage database
        $user = $this->categoriesColorsServices->createColorsCategories([
            'colors_name' => $request->color,
            'colors_slug' => Str::slug($request->color)
        ]);

        // redirect 
        return redirect()->to('categories-color');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id) {}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $data = $this->categoriesColorsServices->getColorsCategories($id);
        return view('admin/categories/colors/updateColors', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //validate 
        $request->validate(['color' => 'required']);

        // if pass then update the colors 
        $updateColor = $this->categoriesColorsServices->updateColorsCategories([
            'colors_name' => $request->color,
            'colors_slug' => Str::slug($request->color)
        ], $id);

        // return 
        return redirect()->to('categories-color');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $deleteColor = $this->categoriesColorsServices->deleteColorsCategories($id);

        //return 
        return redirect()->to('categories-color');
    }
}
