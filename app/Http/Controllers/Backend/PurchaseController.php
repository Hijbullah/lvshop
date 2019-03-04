<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'supplier_id' => 'required',
            'products.*.product_id' => 'required',
            'products.*.unit_price' => 'required|numeric|min:1',
            'products.*.quantity' => 'required|integer|min:1'
        ]);

        $products = collect($request->products)->transform(function($product) {
            $product['total_price'] = $product['quantity'] * $product['unit_price'];
            $product['total_price'] = $product['quantity'] * $product['unit_price'];

            return new InvoiceProduct($product);
        });

        $purchase = $request->except('products');
        $purchase['sub_total'] = $products->sum('total');
        $purchase['grand_total'] = $data['sub_total'] - $data['discount'];

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
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
