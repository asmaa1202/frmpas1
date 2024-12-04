<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 
    public function index()
    {
        $clubId = Auth::user()->club->id;

        // // Vérifier si la licence est active pour l'année en cours
        // $active_licence = Licence::where('plongeur_id', $plongeurId)
        //     ->where('annee', date('Y'))
        //     ->first();

        // Calculer les jours restants jusqu'à la fin de l'année
        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());


        $active_adhesion = Adhesion::where('club_id', $clubId)
                                    ->where('annee', date('Y'))
                                    // ->where('annee', 22)
                                    ->first();
        // dd(empty($active_adhesion));
        return view('clubDash.pages.home', compact('active_adhesion', 'remainingDays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
 
        
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
    public function show(adhesion $adhesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(adhesion $adhesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, adhesion $adhesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      
    }
}
