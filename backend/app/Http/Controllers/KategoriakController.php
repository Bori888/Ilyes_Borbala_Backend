<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriaks=Kategoriak::with('esemenyeks')->get();
        return response()->json($kategoriaks);

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
        $validated = $request -> validate([
            'id'=>'required|biginteger|exists:kategoriaks,id',
            'kategoria_nev'=>'required|enum',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategoriak $kategoriak)
    {
        $kategoriaks=kategoriak::find($id);
        if(!kategoriaks){
            return response()->json(['message'=>'Nincs ilyen tevékenység'],404);
        }
        return response()->json($kategoriaks);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategoriak $kategoriak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategoriak $kategoriak)
    {
        $kategoriaks=Kategoriak::find($id);
        if (!$kategoriaks) {
            return response()->json(['message'=>'Nincs találat'],404);
            $validated = $request -> validate([
            'id'=>'required|biginteger|exists:kategoriaks,id',
            'kategoria_nev'=>'required|enum',
       ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategoriak $kategoriak)
    {
        //
    }
}
