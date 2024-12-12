<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use App\Models\Adhesion;
use App\Models\Licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClubLicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_en_cours_validation = 'en_cours_validation'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 
    public function demandes_en_attentes()
    {
        // $licences = Licence::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        // $adhesion = Adhesion::orderBy('created_at', 'DESC')->paginate(2);
        $licences = Licence::where('statut', self::statut_en_cours)
                    ->whereHas('plongeur', function ($query) {
                        $query->where('club_id', Auth::user()->club->id);
                    })
                    ->orderBy('created_at', 'DESC')
                    ->paginate(100);
        $statut = 'En Attentes';
        return view("clubDash.pages.licences.demandes_en_attentes", compact('statut'))->with("licences", $licences);
    }

    public function updateLicences(Request $request)
    {
        try {
            // dd($request->input());
            $ids = $request->input('ids');
            // dd($ids);

            $statut = $request->input('statut');
            foreach($ids as $id){
                $licence = Licence::find($id);
                $licence->statut = $statut;
                $licence->save();
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de l\'envoie des demandes : ' . $e->getMessage());
        }
        // $licence = Licence::findOrFail($id);

        // $licence->statut = $statut;

        // $licence->save();

        // $licences = Licence::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        // return redirect()->route("demandes_licence.index")
        //                 ->with("success", "Le statut de l'adhésion a été mis à jour avec succès.")
        //                 ->with("licences", $licences);
        // return response()->json(array('message' => "Le statut de l'adhésion a été mis à jour avec succès."), 200);
        // return response()->json([
        //     'message' => "Le statut de l'adhésion a été mis à jour avec succès.",
        //     'redirect_url' => route('demandes.index')
        // ], 200);
        

    }

    public function demandes_en_cours_validation()
    {
        // $licences = Licence::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        // $adhesion = Adhesion::orderBy('created_at', 'DESC')->paginate(2);
        $licences = Licence::where('statut', self::statut_en_cours_validation)
                    ->whereHas('plongeur', function ($query) {
                        $query->where('club_id', Auth::user()->club->id);
                    })
                    ->orderBy('created_at', 'DESC')
                    ->paginate(100);
        $statut = 'En Cours de Validation';
        return view("clubDash.pages.licences.index", compact('statut'))->with("licences", $licences);
    }

    public function demandes_acceptees()
    {
        // $licences = Licence::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        // $adhesion = Adhesion::orderBy('created_at', 'DESC')->paginate(2);
        $licences = Licence::where('statut', self::statut_accepter)
                    ->whereHas('plongeur', function ($query) {
                        $query->where('club_id', Auth::user()->club->id);
                    })
                    ->orderBy('created_at', 'DESC')
                    ->paginate(100);
        $statut = 'Acceptées';
        return view("clubDash.pages.licences.index", compact('statut'))->with("licences", $licences);
    }

    public function demandes_refusees()
    {
        // $licences = Licence::where('statut', self::statut_en_cours)->orderBy('created_at', 'DESC')->paginate(100);

        // $adhesion = Adhesion::orderBy('created_at', 'DESC')->paginate(2);
        $licences = Licence::where('statut', self::statut_refuser)
                    ->whereHas('plongeur', function ($query) {
                        $query->where('club_id', Auth::user()->club->id);
                    })
                    ->orderBy('created_at', 'DESC')
                    ->paginate(100);
        $statut = 'Refusées';
        return view("clubDash.pages.licences.index", compact('statut'))->with("licences", $licences);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
 
        
    }

    public function readDocument(String $id)
    {
        try {
            $licence = Licence::findOrFail($id);

            // Vérifiez si le document existe dans la base de données
            if (empty($licence->document)) {
                return response()->json(['message' => 'Aucun Attestaion de paiement!'], 404);
            }

            // Vérifiez si le fichier existe dans le système de stockage
            if (Storage::exists($licence->document)) {
                $content = Storage::get($licence->document);
                return response($content)
                    ->header('Content-Type', Storage::mimeType($licence->document))
                    ->header('Content-Disposition', 'inline; filename="' . basename($licence->document) . '"');
            } else {
                return response()->json(['message' => 'Fichier introuvable'], 404);
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de la lecture du document : ' . $e->getMessage());
        }
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
            $deletedDemande = Licence::where("id", $id)->delete();
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
