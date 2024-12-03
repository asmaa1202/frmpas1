<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Level;
use App\Models\User;
use App\Models\Plongeur;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::with('plongeur')->with("formateur")->get();
        return view("dashboard.pages.formations.index")->with("formations", $formations);
    }

    /**
     * Display a listing of the resource.
     */
    public function forationsmParPlongeur()
    {
        $niveaux = Level::whereHas('formations', function ($query) {
            return $query->where('id_plongeur', '=', auth()->user()->id);
        })->with("formations")->get();
        return view("plongeurDash.pages.formations.index")->with("niveaux", $niveaux ?? []);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plongeurs = Plongeur::all();
        $users = User::all();
        return view("dashboard.pages.formations.ajouter", ["formateurs" => $users, "plongeurs" => $plongeurs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $plongeur = Plongeur::find($request->plongeur);

            $formation = new Formation();
            $formation->nom = $request->nom;
            $formation->id_plongeur = $request->plongeur;
            $formation->id_formateur = $request->formateur;
            $formation->heure_depart = $request->heure_depart;
            $formation->heure_sortie = $request->heure_sortie;
            $formation->prof_m = $request->prof_m;
            $formation->observation = $request->observation;
            $formation->observation = $request->observation;
            $formation->cree_par = auth()->user()->id;
            $formation->id_niveau = $plongeur->id_niveau;
            $formation->save();

            return response()->json(array('message' => "Formation est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $formation = Formation::find($id);
        return view("dashboard.pages.formations.modifier", ["formation" =>  $formation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formation = Formation::find($id);
        $plongeurs = Plongeur::all();
        $users = User::all();
        return view("dashboard.pages.formations.modifier", ["formateurs" => $users, "plongeurs" => $plongeurs, "formation" => $formation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $formation = Formation::find($id);
            $formation->nom = $request->nom;
            $formation->id_plongeur = $request->plongeur;
            $formation->id_formateur = $request->formateur;
            $formation->heure_depart = $request->heure_depart;
            $formation->heure_sortie = $request->heure_sortie;
            $formation->prof_m = $request->prof_m;
            $formation->observation = $request->observation;
            $formation->cree_par = auth()->user()->id;

            $formation->save();

            return response()->json(array('message' => "Formation est modifié avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $deletedFormation = Formation::where("id", $id)->delete();
            if ($deletedFormation <> 0) {
                return response()->json(array('message' => "Formation est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
}