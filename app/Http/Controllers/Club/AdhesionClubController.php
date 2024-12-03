<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use Illuminate\Http\Request;

class AdhesionClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 
    public function demande_adhesion($id)
    {
      
        try {

            // dd($id);
            $demande_adhesion = new Adhesion();
            $demande_adhesion->club_id = $id;
            $demande_adhesion->montant = 1999;
            $demande_adhesion->annee = date('Y');
            $demande_adhesion->statut = self::statut_en_cours;
            $demande_adhesion->save();
    
            return response()->json(['message' => 'La demande d\'adhésion a été envoyée avec succès'], 200);
    


            
        } catch (\Exception $err) {
            // dd($err);
            return response()->json(array('message' => $err), 500);
        }
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
