<?php

namespace App\Http\Controllers;

use App\Models\Merek;
use App\Models\Distributor;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{ 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::latest()->paginate(5);
return view('barangs.index',compact('barangs'))
->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merek = Merek::all();
        $distributor = Distributor::all();
        return view('barangs.create', compact('merek', 'distributor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        ]);
        Barang::create([
            'nama_barang' => $request ->nama_barang,
            'nama_merek' => $request ->nama_merek,
            'nama_distributor' => $request ->nama_distributor,
            'harga_barang' => $request ->harga_barang,
            'harga_beli' => $request ->harga_beli,
            'stok' => $request ->stok,
            'tanggal_masuk' => $request ->tanggal_masuk,
            'nama_petugas' => auth()->user()->name,
            ]);
            return redirect()->route('barangs.index')
            ->with('success','Barang created successfully.');            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barangs.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        $merek = Merek::all();
        $distributor = Distributor::all();
        return view('barangs.edit',compact('barang', 'merek', 'distributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'nama_merek' => 'required',
            'nama_distributor' => 'required',
            'harga_barang' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
            'tanggal_masuk' => 'required',
            'nama_petugas' => 'required',
            ]);
            $barang->update($request->all());
            return redirect()->route('barangs.index')
            ->with('success','Barang updated successfully');            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
return redirect()->route('barangs.index')
->with('success','Barang deleted successfully');
    }
}
