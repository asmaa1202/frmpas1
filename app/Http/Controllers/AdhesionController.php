<?php

namespace App\Http\Controllers;

use App\Models\Adhesion;
use Illuminate\Http\Request;

class AdhesionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 
    public function index()
    {
        $adhesion = Adhesion::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        // $adhesion = Adhesion::orderBy('created_at', 'DESC')->paginate(2);
        return view("dashboard.pages.adhesions.index")->with("adhesions", $adhesion);
    }

    public function adhesion_statut($id, $statut)
    {

        $adhesion = Adhesion::findOrFail($id);

        $adhesion->statut = $statut;

        $adhesion->save();

        $adhesions = Adhesion::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        return redirect()->route("demandes.index")
                        ->with("success", "Le statut de l'adhésion a été mis à jour avec succès.")
                        ->with("adhesions", $adhesions);
        // return response()->json(array('message' => "Le statut de l'adhésion a été mis à jour avec succès."), 200);
        // return response()->json([
        //     'message' => "Le statut de l'adhésion a été mis à jour avec succès.",
        //     'redirect_url' => route('demandes.index')
        // ], 200);
        

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

        $request->validate([
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'ville'=>'required|string',
            'telephone'=>'required|string',
            'email'=>'required|email'
        ],["nom.required"=>"Nom est obligatoire",
              "prenom.required"=>"prenom est obligatoire",
             "ville.required"=>"ville est obligatoire",
             "telephone.required"=>"telephone est obligatoire",
             "email.required"=>"email est obligatoire"]);

        

        try{
        
         $adhesion= new Adhesion();

         $adhesion->nom=$request->nom;
         $adhesion->prenom=$request->prenom;
         $adhesion->ville=$request->ville;
         $adhesion->telephone=$request->telephone;
         $adhesion->email=$request->email;

         $adhesion->save();

         return response()->json(array('message' => "Adhérent est ajouter avec succés"), 200);

        }catch(\Exception $err){
            return response()->json(array('message' => "Erreur sevenu"), 500);

        }

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
        try {
            $deletedDemande = adhesion::where("id", $id)->delete();
            if ($deletedDemande <> 0) {
                return response()->json(array('message' => "Demande est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }
    }
}
