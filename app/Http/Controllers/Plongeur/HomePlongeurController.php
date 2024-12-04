<?php

namespace App\Http\Controllers\Plongeur;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class HomePlongeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const statut_refuser = 'refuser'; 
    // public function index()
    // {
    //     $active_licence = Licence::where('plongeur_id', Auth::guard('plongeurs')->user()->id)->where('annee', date('Y'))->first();
    //     // dd(Auth::guard('plongeurs')->user()->id);
    //     return view('plongeurDash.pages.home', compact('active_licence'));
    // }

    public function index()
    {
        $plongeurId = Auth::guard('plongeurs')->user()->id;

        // Vérifier si la licence est active pour l'année en cours
        $active_licence = Licence::where('plongeur_id', $plongeurId)
            // ->where('annee', date('Y'))
            ->where('annee', 22)
            ->first();

        // Calculer les jours restants jusqu'à la fin de l'année
        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());

        // Passer les variables à la vue
        return view('plongeurDash.pages.home', compact('active_licence', 'remainingDays'));
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
