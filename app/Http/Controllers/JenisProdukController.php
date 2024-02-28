<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //DIGUNAKAN UNTUK MENAMPILKAN DATA JENIS PRODUK
        $jp = JenisProduk::all();
        if (isset($jp)) {
            $hasil = [
                'success' => true,
                'message' => 'Data Jenis Produk',
                'data' => $jp
            ];
            return response()->json($hasil, 200);
        } else {
            $fails = [
                'success' => false,
                'message' => 'Data Jenis Produk Tidak Ditemukan',
                'data' => []
            ];
            return response()->json($fails, 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //DIGUNAKAN UNTUK MENGHAPUS DATA JENIS PRODUK
        $jp = Produk::where('id', $id)->first();
        if (isset($jp)) {
            $p->delete();
            $success = [
                'success' => true,
                'message' => 'Data Jenis Produk Berhasil dihapus',
                'data' => $jp
            ];
            return response()->json($success, 200);
        } else {
            $fails = [
                'success' => false,
                'message' => 'Data Jenis Produk Tidak Ditemukan',
                'data' => []
            ];
            return response()->json($fails, 404);
        }
    }
}
