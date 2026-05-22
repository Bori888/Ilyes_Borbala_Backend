<?php

namespace App\Http\Controllers;

use App\Models\esemenyek;
use Illuminate\Http\Request;

class EsemenyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $esemenyeks=esemenyek::all();
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
            'id'=>'required|biginteger|exists:esemenyeks,id',
            'kategoria_id'=>'required|biginteger',
            'esemeny_nev'=>'required|string|min:1|max:20',
            'leiras'=>'required|text',
            'datum'=>'required|timestamp',
            'resztvevok'=>'required|integer',
            'ar'=>'required|integer',
            'kepUrl'=>'required|string|min:1|max:225',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(esemenyek $esemenyek)
    {
         $esemenyeks=Esemenyek::find($id);
        if(!esemenyeks){
            return response()->json(['message'=>'Nincs ilyen tevékenység'],404);
        }
        return response()->json($esemenyeks);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(esemenyek $esemenyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, esemenyek $esemenyek)
    {
        $esemenyeks=esemenyek::find($id);
        if (!$esemenyeks) {
            return response()->json(['message'=>'Nincs találat'],404);
        $validated = $request -> validate([
            'id'=>'required|biginteger|exists:esemenyeks,id',
            'kategoria_id'=>'required|biginteger',
            'esemeny_nev'=>'required|string|min:1|max:20',
            'leiras'=>'required|text',
            'datum'=>'required|timestamp',
            'resztvevok'=>'required|integer',
            'ar'=>'required|integer',
            'kepUrl'=>'required|string|min:1|max:225',
        ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(esemenyek $esemenyek)
    {
        //
    }
}
