<?php

namespace App\Http\Controllers;

use App\Models\ExercicePlongeurStatut;
use Illuminate\Http\Request;
use Auth;

class ExercicePlongeurStatutController extends Controller
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
    public function validerFormation(Request $request)
    {
        try {
            $exercice_plongeur_statut = new ExercicePlongeurStatut();
            $exercice_plongeur_statut->id_exercice = $request->exercice;
            $exercice_plongeur_statut->id_plongeur = $request->plongeur;
            $exercice_plongeur_statut->id_calendrier = $request->calendrier;
            $exercice_plongeur_statut->validee = 1;
            $exercice_plongeur_statut->validee_par = auth()->user()->id;

            $exercice_plongeur_statut->save();
        } catch(err) {
            dd(err);
        }
    }

    public function refuserFormation(Request $request)
    {
        try {
            $exercice_plongeur_statut = new ExercicePlongeurStatut();
            $exercice_plongeur_statut->id_exercice = $request->exercice;
            $exercice_plongeur_statut->id_plongeur = $request->plongeur;
            $exercice_plongeur_statut->id_calendrier = $request->calendrier;
            $exercice_plongeur_statut->validee = 0;
            $exercice_plongeur_statut->validee_par = auth()->user()->id;

            $exercice_plongeur_statut->save();
        } catch(err) {
            dd(err);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(ExercicePlongeurStatut $exercicePlongeurStatut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExercicePlongeurStatut $exercicePlongeurStatut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExercicePlongeurStatut $exercicePlongeurStatut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExercicePlongeurStatut $exercicePlongeurStatut)
    {
        //
    }
}
