<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\ProductPurchase;
use App\Http\Controllers\Controller;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::with('supplier:id,name','products')->latest()->paginate(10);
        return view('backend.pages.purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.purchases.create');
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
            // 'purchase_code' => 'required|alpha_dash|unique:purchases',
            'purchase_date' => 'required|date_format:Y-m-d',
            'supplier_id' => 'required|min:1',
            'products.*.product_id' => 'required',
            'products.*.unit_price' => 'required|numeric|min:1',
            'products.*.quantity' => 'required|integer|min:1'
        ]);

        $products = collect($request->products)->transform(function($product) {
            $product['sub_total'] = $product['quantity'] * $product['unit_price'];
            $product['batch'] = str_random(4);
            return $product;
        });

        $purchase = $request->except('products');
        $purchase['purchase_code'] = str_random(10);
        $purchase['total_price'] = $products->sum('sub_total');
        $purchase['total_quantity'] = $products->sum('quantity');

        // storing purchse and get the purchase
        $purchase = Purchase::create($purchase);
        
        // storing into product_purchase table
        foreach($products as $product){
            $product['purchase_id'] = $purchase->id;
            ProductPurchase::create($product);
        }
        return response()->json(['redirect'=> route('purchases.index')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('backend.pages.purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }

    /**
     * Display a listing of the Products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductsAndSuppliersForCreate()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        
        return response()->json([$products, $suppliers]);

    }

}
