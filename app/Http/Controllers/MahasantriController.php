<?php

namespace App\Http\Controllers;

use App\Models\Mahasantri;
use Illuminate\Http\Request;

class MahasantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //DIGUNAKAN UNTUK MENAMPILKAN DATA MAHASANTRI
        $mhs = Mahasantri::all();
        if (isset($mhs)) {
            $hasil = [
                'success' => true,
                'message' => 'Data Mahasantri',
                'data' => $mhs
            ];
            return response()->json($hasil, 200);
        } else {
            $fails = [
                'success' => false,
                'message' => 'Data Mahasantri Tidak Ditemukan',
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
        //DIGUNAKAN UNTUK MENGHAPUS DATA MAHASANTRI
        $mhs = Mahasantri::where('id', $id)->first();
        if (isset($mhs)) {
            $mhs->delete();
            $success = [
                'success' => true,
                'message' => 'Data Mahasantri Berhasil dihapus',
                'data' => $mhs
            ];
            return response()->json($success, 200);
        } else {
            $fails = [
                'success' => false,
                'message' => 'Data Mahasantri Tidak Ditemukan',
                'data' => []
            ];
            return response()->json($fails, 404);
        }
    }
}
