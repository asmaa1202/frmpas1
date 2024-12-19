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
    public function demande_adhesion(Request $request, $id)
    {
      
        try {

            // dd($id);
            $adhesion_actuelle = Adhesion::where('club_id', $id)
                                        ->where('annee', date('Y'))
                                        ->whereNot('statut', self::statut_refuser)
                                        ->first();

            $demande_adhesion = new Adhesion();
            $demande_adhesion->club_id = $id;
            $demande_adhesion->montant = 3000;
            if(now()->month == 12 && isset($adhesion_actuelle)){
                $demande_adhesion->annee = date('Y') + 1;      
           }elseif(empty($adhesion_actuelle)){
               $demande_adhesion->annee = date('Y'); 
           }
            // $demande_adhesion->annee = date('Y');
            $demande_adhesion->statut = self::statut_en_cours;

            $file = $request->document;
            $adhesion_document = $file->store('attestation paiement');
            $demande_adhesion->document = $adhesion_document ?? null;
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
