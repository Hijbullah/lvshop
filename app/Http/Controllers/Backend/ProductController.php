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
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:100', 'unique:products'],
            'short_description' => ['required', 'string', 'min:100'],
            'cover_img' => ['image','required', 'mimes:jpg,jpeg,png' ],
            'images.*' => ['image', 'mimes:jpg,jpeg,png'],
            'quantity' => ['nullable', 'numeric', 'min:0'],
            'unit_price' => ['nullable', 'numeric', 'min:0'],
            'sale_price' => ['nullable', 'numeric', 'min:0'],
            //'sale_price' => ['nullable', 'numeric', 'min:0'],
        ]);

        if($request->hasFile('images')) {
           $pathString = $this->storingMultipleImages($request->images); 
        }
        
        if($request->hasFile('cover_img')) {
            $path = $request->cover_img->store('public/Products');
            $path = Storage::url($path);
        }

        $product = new Product;
        $product->product_code = str_random(15);;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->cover_img = $path;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->images = $request->hasFile('images') ? $pathString : null;
        $product->quantity = $request->quantity;
        $product->unit_price = $request->unit_price;
        $product->sale_price = $request->sale_price;
        //$product->discount_price = $request->discount_price;
        $product->status = $request->status;

        $category = Category::find($request->category_id);
        $category->products()->save($product);
        
        return redirect()->route('products.index')->with('status', 'product has successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $images = explode(',', $product->images);
        return view('backend.pages.products.show', compact('product', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get()->toTree();
        return view('backend.pages.products.edit', compact('product', 'categories'));
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
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:100'],
            'short_description' => ['required', 'string', 'min:100'],
            'cover_img' => ['image', 'mimes:jpg,jpeg,png' ],
            'images.*' => ['image', 'mimes:jpg,jpeg,png'],
            'quantity' => ['nullable', 'numeric', 'min:0'],
            'unit_price' => ['nullable', 'numeric', 'min:0'],
            'sale_price' => ['nullable', 'numeric', 'min:0'],
            //'sale_price' => ['nullable', 'numeric', 'min:0'],
        ]);

        if($request->hasFile('images')) {
           $pathString = $this->storingMultipleImages($request->images); 
        }
        
        if($request->hasFile('cover_img')) {
            $path = $request->cover_img->store('public/Products');
            $path = Storage::url($path);
        }

        //$product->product_code = str_random(15);;
        $product->name = $request->name;
        $product->slug = $request->slug;
        if($request->hasFile('cover_img')) {
            $product->cover_img = $path;
        }
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        if($request->hasFile('images')) {
            $product->images = $pathString;
        }
        
        $product->quantity = $request->quantity;
        $product->unit_price = $request->unit_price;
        $product->sale_price = $request->sale_price;
        //$product->discount_price = $request->discount_price;
        $product->status = $request->status ? 1 : 0;

       

        $category = Category::find($request->category_id);
        $category->products()->save($product);
        
        return redirect()->route('products.index')->with('status', 'product has successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect()->route('products.index')->with('status', 'Product has been deleted successfully');

    }


    public function showing() {
        return view('backend.pages.products.show');
        
    }

    /**
     * Stroring Multiple Images to the local Storage.
     *
     * @param $images
     * @return $paths in string
     */
    public function storingMultipleImages($images)
    {
        $pathArray = [];
        foreach($images as $image){
            $path = $image->store('public/Products');
            $path = Storage::url($path);
            $pathArray[] = $path;
        }
        return implode(',', $pathArray);
    }
}
