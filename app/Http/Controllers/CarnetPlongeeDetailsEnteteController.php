<?php

namespace App\Http\Controllers;

use App\Models\CarnetPlongeeDetailsEntete;
use App\Models\CarnetPlongeeDetails;
use App\Models\User;
use Illuminate\Http\Request;

class CarnetPlongeeDetailsEnteteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carnets_plongee = CarnetPlongeeDetails::orderBy('created_at', 'DESC')->paginate(100);
        return view("dashboard.pages.carnet_plongee.index")->with("carnets_plongee", $carnets_plongee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view("dashboard.pages.carnet_plongee.ajouter")->with("users", $users);;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $carnetPlongee = new CarnetPlongeeDetailsEntete();
            $carnetPlongee->lieu = $request->lieu;
            $carnetPlongee->id_directeur = $request->id_directeur;
            $carnetPlongee->id_instructeur = $request->id_instructeur;
            $carnetPlongee->site = $request->site;
            $carnetPlongee->support = $request->support;
            $carnetPlongee->profondeur = $request->profondeur;
            $carnetPlongee->table = $request->table;
            $carnetPlongee->dt = $request->dt;
            $carnetPlongee->temps = $request->temps;
            $carnetPlongee->courant = $request->courant;
            $carnetPlongee->vent = $request->vent;
            $carnetPlongee->visibilite = $request->visibilite;
            $carnetPlongee->mer = $request->mer;
            $carnetPlongee->t_eau = $request->t_eau;
            $carnetPlongee->plongee = $request->plongee;
            $carnetPlongee->cree_par = auth()->user()->id;

            $carnetPlongee->save();

            return response()->json(array('message' => "Carner de plongee est ajouté avec succés", 'id' => $carnetPlongee->id), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function affectationPlongeur(Request $request, $id)
    {
        try {
            $equipePlongeur = new CarnetPlongeeDetails();
            $equipePlongeur->id_plongeur = $request->plongeur;
            $equipePlongeur->id_carnet_plongee = $id;
            $equipePlongeur->id_equipe = $request->equipe;
            $equipePlongeur->heure_depart = $request->heure_depart;
            $equipePlongeur->heure_sortie = $request->heure_sortie;
            $equipePlongeur->prof_m = $request->profondeur;
            $equipePlongeur->dt_mn = $request->dt;
            $equipePlongeur->p_depart = $request->p_depart;
            $equipePlongeur->p_sortie = $request->p_sortie;
            $equipePlongeur->paliere_12 = $request->paliers12;
            $equipePlongeur->paliere_9 = $request->paliers9;
            $equipePlongeur->paliere_6 = $request->paliers6;
            $equipePlongeur->paliere_oxy = $request->paliers_oxy;
            $equipePlongeur->paliere_3 = $request->paliers3;
            $equipePlongeur->observation = $request->observation;
            $equipePlongeur->cree_par = auth()->user()->id;

            $equipePlongeur->save();
            $plongeurAjouter = CarnetPlongeeDetails::where("id", $equipePlongeur->id)->with("plongeur")->with("equipe")->first();
            return response()->json(array('message' => "Carner de plongee est ajouté avec succés", 'plongeurAjouter' => $plongeurAjouter), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CarnetPlongeeDetailsEntete $carnetPlongee)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarnetPlongeeDetailsEntete $carnetPlongee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarnetPlongeeDetailsEntete $carnetPlongee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarnetPlongeeDetailsEntete $carnetPlongee)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function carnetPlongeeParPlongeur(Request $request, $id)
    {
        $carnetPlongee = CarnetPlongeeDetails::with("equipe")->with("plongeur")->where("id_plongeur", "=", $id)->get();
        return view("dashboard.pages.plongeur.carnet-de-plongee", ["carnets_plongee" => $carnetPlongee]);
    }
}