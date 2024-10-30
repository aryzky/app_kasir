<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('home.pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('home.pelanggan.tambah', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        return view('home.pelanggan.edit',compact('pelanggan'));
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
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);
        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect('/pelanggan')->with('success','Data Berhasil Dihapus.');
    }
}
