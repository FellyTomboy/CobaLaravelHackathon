<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Jurusan::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validated([
            'nama' => 'required|string|max:255',
        ]);
        return Jurusan::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Jurusan::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->update($request->only(['nama']));
        return $jurusan;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Jurusan::destroy($id);
        return response()->json(['message' => 'Jurusan deleted']);
    }
}
