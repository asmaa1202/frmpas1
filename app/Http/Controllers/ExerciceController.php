<?php

namespace App\Http\Controllers;

use App\Models\Exercice;
use App\Models\Level;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exercices = Exercice::with('niveau')->get();
        return view("dashboard.pages.exercices.index")->with("exercices", $exercices);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $niveaux = Level::all();
        return view("dashboard.pages.exercices.ajouter", ["niveaux" => $niveaux]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $exercice = new Exercice();
            $exercice->label = $request->label;
            $exercice->id_niveau = $request->id_niveau;
            $exercice->obligatoire = $request->obligatoire;
            $exercice->save();

            return response()->json(array('message' => "Exercice est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $exercice = Exercice::find($id);
        dd($exercice);
        return view("dashboard.pages.exercices.modifier", ["Exercice" =>  $exercice]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exercice = Exercice::find($id);
        $niveaux = Level::all();
        return view("dashboard.pages.exercices.modifier", ["niveaux" => $niveaux, "exercice" => $exercice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $exercice = Exercice::find($id);
            $exercice->label = $request->label;
            $exercice->id_niveau = $request->id_niveau;
            $exercice->obligatoire = $request->obligatoire;

            $exercice->save();

            return response()->json(array('message' => "Exercice est modifié avec succés"), 200);
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
            $deletedExercice = Exercice::where("id", $id)->delete();
            if ($deletedExercice <> 0) {
                return response()->json(array('message' => "Exercice est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
    public function exercicesParNiveau($id_niveau)
    {
        try {
            $exercices = Exercice::where("id_niveau", $id_niveau)->get();
            return $exercices;
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }

}