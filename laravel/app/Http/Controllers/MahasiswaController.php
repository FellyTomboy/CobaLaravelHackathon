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
        $validated = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|unique:mahasiswas,nim',
            'jurusan' => 'required|string',
        ]);

        return Mahasiswa::create($validated);
    }

    public function show($id)
    {
        return Mahasiswa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->only(['nama', 'nim', 'jurusan']));
        return $mhs;
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return response()->json(['message' => 'Mahasiswa deleted']);
    }
}
