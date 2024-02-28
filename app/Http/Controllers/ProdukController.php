<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //DIGUNAKAN UNTUK MENAMPILKAN DATA PRODUK
         $p = Produk::all();
         if (isset($p)) {
             $hasil = [
                 'success' => true,
                 'message' => 'Data Produk',
                 'data' => $p
             ];
             return response()->json($hasil, 200);
         } else {
             $fails = [
                 'success' => false,
                 'message' => 'Data Produk Tidak Ditemukan',
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
        //DIGUNAKAN UNTUK MENGHAPUS DATA PRODUK
        $p = Produk::where('id', $id)->first();
        if (isset($p)) {
            $p->delete();
            $success = [
                'success' => true,
                'message' => 'Data Produk Berhasil dihapus',
                'data' => $p
            ];
            return response()->json($success, 200);
        } else {
            $fails = [
                'success' => false,
                'message' => 'Data Produk Tidak Ditemukan',
                'data' => []
            ];
            return response()->json($fails, 404);
        }
    }
}
