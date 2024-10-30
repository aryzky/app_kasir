<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\Produk;
use App\Models\DetailPenjualan;



class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('home.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('home.penjualan.tambah', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'tanggal_penjualan' => now(),
            'total_harga' => 0,
            'id_pelanggan' => 1,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = Penjualan::find($id);
        $pelanggan = Pelanggan::all();
        $produk = Produk::all();
        $detailpenjualan = DetailPenjualan::orderBy('created_at', 'desc')->get();
        return view('home.penjualan.detail_penjualan.tambah', compact('penjualan','pelanggan','produk', 'detailpenjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pelanggan::craeate([
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'total_harga' => $request->total_harga,
            'id_pelanggan' => $request->id_pelanggan,
        ]);
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }
    
    public function tambahPenjualan(Request $request)
    {
        Penjualan::create([
            'tanggal_penjualan'=>now(),
            'harga'=> 0,
            'id_pelanggan'=> 1

        ]);
        return redirect('/penjualan')->with('berhasil','Data penjualan berhasil ditambahkan');
    }
}
