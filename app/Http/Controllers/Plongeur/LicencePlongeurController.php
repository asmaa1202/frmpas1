<?php

namespace App\Http\Controllers\Plongeur;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Licence;
use App\Models\Plongeur;use Illuminate\Http\Request;

class LicencePlongeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 

    const type_membre_athlete = 1; 
    const type_membre_plongeur = 2; 
    const type_membre_moniteur = 3; 
    public function demande_licence(Request $request, $id)
    {
    //   dd(now()->month);
        try {

            // dd($id);
            $plongeur = Plongeur::find($id);
            $id_dl = "";
            // if($plongeur->type_plongeur_id = self::type_membre_plongeur){
            //     $id_dl = 'FMP'.date('Y').aleatroire(6 chiffre);

            // }
            if ($plongeur->type_plongeur_id == self::type_membre_plongeur) {
           
                $lastLicence = Licence::orderBy('id', 'desc')->first();
                
                $lastId = $lastLicence ? intval(substr($lastLicence->id, -6)) : 0;
                $nextId = $lastId + 1;
    
                $id_dl = 'FMP' . date('Y') . str_pad($nextId, 6, '0', STR_PAD_LEFT);
                // return response()->json(['message' => $id_dl], 200);

            }elseif($plongeur->type_plongeur_id == self::type_membre_athlete){
                $lastLicence = Licence::orderBy('id', 'desc')->first();
                $lastId = $lastLicence ? intval(substr($lastLicence->id, -6)) : 0;
                $nextId = $lastId + 1;
    
                $id_dl = 'FMA' . date('Y') . str_pad($nextId, 6, '0', STR_PAD_LEFT);

            }elseif($plongeur->type_plongeur_id == self::type_membre_moniteur){
                $lastLicence = Licence::orderBy('id', 'desc')->first();
                $lastId = $lastLicence ? intval(substr($lastLicence->id, -6)) : 0;
                $nextId = $lastId + 1;
    
                $id_dl = 'FMM' . date('Y') . str_pad($nextId, 6, '0', STR_PAD_LEFT);
            }

            $licence_actuelle =Licence::where('plongeur_id', $id)
                                        ->where('annee', date('Y'))
                                        ->whereNot('statut', self::statut_refuser)
                                        ->first();
            // dd(isset($licence_actuelle));
            
            $demande_licence = new Licence();
            $demande_licence->custom_id =  $id_dl;
            $demande_licence->plongeur_id = $id;
            $demande_licence->type_id = $plongeur->type_plongeur_id;
            $demande_licence->montant = 1999;
            if(now()->month == 12 && isset($licence_actuelle)){
                 $demande_licence->annee = date('Y') + 1;      
            }elseif(empty($licence_actuelle)){
                $demande_licence->annee = date('Y'); 
            }
           
            $demande_licence->statut = self::statut_en_cours;

            $file = $request->document;
            $licence_document = $file->store('attestation paiement');
            $demande_licence->document = $licence_document ?? null;
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
