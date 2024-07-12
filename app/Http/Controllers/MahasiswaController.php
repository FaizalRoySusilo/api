<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return Mahasiswa::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Barang' => 'required',
            'Jumlah_Barang' => 'required',
            'Harga_Barang' => 'required',
        ]);

        return Mahasiswa::create($request->all());
    }

    public function show(Mahasiswa $item)
    {
        return $item;
    }

    public function update(Request $request, Mahasiswa $item)
    {
        $request->validate([
            'Nama_Barang' => 'required',
            'Jumlah_Barang' => 'required',
            'Harga_Barang' => 'required',
        ]);

        $item->update($request->all());

        return $item;
    }

    public function destroy(Mahasiswa $item)
    {
        $item->delete();

        return response()->json(null, 204);
    }
}
