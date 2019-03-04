<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cupons = Cupon::latest()->paginate(10);
        return view('backend.pages.cupons.index', compact('cupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.cupons.create');
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
            'name' => ['required', 'string', 'max:191', 'unique:cupons'],
            'cupon_code' => ['required', 'string', 'max:191', 'unique:cupons'],
            'type' => ['required', 'numeric'],
            'value' => ['required', 'numeric', 'min:0'],
        ]);

        Cupon::create($request->all());
        return redirect()->route('cupons.index')->with('status', 'Cupon added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function show(Cupon $cupon)
    {
        return view('backend.pages.cupons.show', compact('cupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Cupon $cupon)
    {
        return view('backend.pages.cupons.edit', compact('cupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cupon $cupon)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:191', 'unique:cupons,name,' . $cupon->id],
            'cupon_code' => ['required', 'string', 'max:191', 'unique:cupons,cupon_code,' . $cupon->id],
            'type' => ['required', 'numeric'],
            'value' => ['required', 'numeric', 'min:0'],
        ]);

        $cupon->update($request->all());
        return redirect()->route('cupons.index')->with('status', 'Cupon Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupon $cupon)
    {
        Cupon::destroy($cupon->id);
        return redirect()->route('cupons.index')->with('status', 'Cupon Deleted successfully');
    }
}
