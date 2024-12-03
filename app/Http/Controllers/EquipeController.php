<?php

namespace App\Http\Controllers;

use App\Models\CarnetPlongee;
use App\Models\Equipe;
use App\Models\EquipePlongeur;
use App\Models\Plongeur;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $carnet_plongee = CarnetPlongee::where("id", $id)->first();
//        return $carnet_plongee;
        $equipes = Equipe::where("id_carnet_plongee", $id)->get();
        $plongeurs = Plongeur::all();
        $equipePlongeur = EquipePlongeur::whereIn("id_equipe", array_column($equipes->toArray(), "id"))->with("plongeur")->with("equipe")->orderBy('created_at', 'desc')->get();

        return view("dashboard.pages.equipe.index", ["carnet_plongee" => $carnet_plongee, "equipes" => $equipes, "plongeurs" => $plongeurs, "equipePlongeur" => $equipePlongeur]);
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
    public function store(Request $request, $id)
    {
        try {
            $equipe = new Equipe();
            $equipe->nom = $request->nom;
            $equipe->secours = $request->secours;
            $equipe->id_carnet_plongee = $id;

            $equipe->save();

            return response()->json(array('message' => "Equipe est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipe $equipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipe $equipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipe $equipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipe $equipe)
    {
        //
    }
}