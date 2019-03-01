<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('backend.pages.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gbin' => ['required', 'max:10' ],
            'name' => ['required', 'string', 'max:191'],
            'slug' => ['required', 'string', 'max:191', 'unique:brands'],
        ]);

        Brand::create($request->all());
        return redirect()->route('brands.index')->with('status', 'Brand added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('backend.pages.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('backend.pages.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'gbin' => ['required', 'max:10' ],
            'name' => ['required', 'string', 'max:191'],
            'slug' => ['required', 'string', 'max:191', 'unique:brands,slug,' . $brand->id],
        ]);

        $brand->update($request->all());
        return redirect()->route('brands.index')->with('status', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        Brand::destroy($brand->id);
        return redirect()->route('brands.index')->with('status', 'Brand Deleted successfully');
    }
}
