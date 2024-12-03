<?php

namespace App\Http\Controllers;

use App\Models\Calendrier;
use App\Models\CalendrierPlongeur;
use App\Models\Plongeur;
use App\Models\User;
use App\Models\Level;
use App\Models\CalendrierExercice;
use Illuminate\Http\Request;
use App\Mail\senMail;
use Mail;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $plongeurs = Plongeur::all();
        $niveaux = Level::all();
        return view("dashboard.pages.calendrier.index")->with("users", $users)->with("plongeurs", $plongeurs)->with("niveaux", $niveaux);
    }

    /**
     * Display a listing of the resource.
     */
    public function fetchCalendriers()
    {
        $calendriers = Calendrier::with('encadrant')->with("plongeurs")->get();
        return $calendriers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $calendrier = new Calendrier();
            $calendrier->titre = $request->titre;
            $calendrier->date_debut = $request->date_debut;
            $calendrier->date_fin = $request->date_fin;
            $calendrier->type = $request->type;
            $calendrier->id_niveau = $request->niveau;
            $calendrier->id_encadrant = $request->encadrant;
            $calendrier->observation = $request->observation;

            $calendrier->save();
            foreach ($request->plongeurs as $plongeur) {
                $plongeur_calendrier = new CalendrierPlongeur();
                $plongeur_calendrier->id_plongeur = $plongeur;
                $plongeur_calendrier->id_calendrier = $calendrier->id;
                $plongeur_calendrier->save();
            }
            if ($request->exercices) {
                foreach ($request->exercices as $exercice) {
                    $calendrierExercice = new CalendrierExercice();
                    $calendrierExercice->id_exercice = $exercice;
                    $calendrierExercice->id_calendrier = $calendrier->id;
                    $calendrierExercice->save();
                }
            }
//            $plongeurs = Plongeur::whereIn('id', $request->plongeurs)->get();
//            $mailData = [
//                "title" => "hello",
//                "body" => "",
//            ];
//            Mail::to($plongeurs->map(function ($plongeur) {
//                return $plongeur->email;
//            }))->send(new senMail($mailData));
            $data = Calendrier::where("id", $calendrier->id)->with('encadrant')->with("plongeurs")->get();

            return $data;
        } catch (\Exception $err) {
            dd($err);
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendrier $calendrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendrier $calendrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $calendrier = Calendrier::find($id);
            $calendrier->titre = $request->titre;
            $calendrier->date = $request->date;
            $calendrier->observation = $request->observation;

            $calendrier->save();

            return response()->json(array('message' => "Blog est modifiée avec succés",), 200);
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
            $deletedCalendrier = Calendrier::where("id", $id)->delete();

            if ($deletedCalendrier <> 0) {
                return response()->json(array('message' => "Calendrier est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
}
