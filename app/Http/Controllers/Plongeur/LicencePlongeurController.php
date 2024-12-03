<?php

namespace App\Http\Controllers\Plongeur;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Licence;
use Illuminate\Http\Request;

class LicencePlongeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 
    public function demande_licence($id)
    {
      
        try {

            // dd($id);
            $demande_licence = new Licence();
            $demande_licence->plongeur_id = $id;
            $demande_licence->type_id = 1;
            $demande_licence->montant = 1999;
            $demande_licence->annee = date('Y');
            $demande_licence->statut = self::statut_en_cours;
            $demande_licence->save();
    
            return response()->json(['message' => 'La demande de licence a été envoyée avec succès'], 200);
    


            
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
