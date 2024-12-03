<?php

namespace App\Http\Controllers;

use App\Models\EquipePlongeur;
use Illuminate\Http\Request;

class CarnetPlongeeDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(EquipePlongeur $equipePlongeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EquipePlongeur $equipePlongeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EquipePlongeur $equipePlongeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $deletedPlongeur = EquipePlongeur::where("id", $id)->delete();
            if ($deletedPlongeur <> 0) {
                return response()->json(array('message' => "Plongeur est supprimé avec succés dans ce carnet de plongee"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
}