<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get()->toTree();
        return view('backend.pages.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'slug' => ['required', 'string', 'max:100', 'unique:products'],
        //     'short_description' => ['required', 'string', 'min:100'],
        //     'cover_img' => ['required', 'mimes:jpg,jpeg,png', ],
        //     'slug' => ['required', 'string', 'max:100'],
        //     'slug' => ['required', 'string', 'max:100'],
        // ]);

        if($request->hasFile('images')) {
            $pathArray = [];
            foreach($request->images as $image){
                $path = $request->cover_image->store('Products');
                $path = Storage::url($path);
                $pathArray[] = $path;
            }

            return $pathArray;
            
        }
        
        // if($request->hasFile('cover_img')) {
        //     $path = $request->cover_image->store('Products');
        //     $path = Storage::url($path);
        // }

        $product = new Product;
        $product->name = $request->name;
        $product->slug = $request->slug;
        //$product->cover_img = $path;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        //$product->images = $request->images;
        $product->quantity = $request->quaunit_pricentity;
        $product->unit_price = $request->unit_price;
        $product->sale_price = $request->sale_price;
        $product->discount_price = $request->discount_price;
        $product->status = $request->status;

        

        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
