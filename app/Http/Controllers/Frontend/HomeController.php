<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $categories = Category::with('descendants')->where(['status' => 1, 'parent_id' => null])->get();
        return view('frontend.pages.index', compact('categories'));
    }
    public function show($id)
    {
        $category = Category::findOrFail($id);
        // Get ids of descendants
        $categories = $category->descendants()->pluck('id');
        // Include the id of category itself
        $categories[] = $category->getKey();
        // Get goods
        $products = Product::whereIn('category_id', $categories)->get();

        return view('frontend.pages.shop', compact('products'));
    }
}
