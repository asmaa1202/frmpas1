<?php

namespace App\Http\Controllers\Club;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Level;
use App\Models\Licence;
use App\Models\Plongeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MoniteurClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const statut_en_cours = 'en cours'; 
    const statut_accepter = 'accepter'; 
    const statut_refuser = 'refuser'; 


    const type_club_moniteur_id = 3; 

    public function index()
    {
    //   $plongeurs = Plongeur::where('type_plongeur_id', self::type_club_moniteur_id)->where('club_id', Auth::user()->club->id)->latest()->get();
    
      $currentYear = Carbon::now()->year;
        
      $plongeurs = Plongeur::where('club_id', Auth::user()->club->id)
            ->whereIn('id', function ($query) use ($currentYear) {
            $query->select('plongeur_id')
                ->from('licences')
                ->where('statut', self::statut_accepter)
                ->where('annee', $currentYear);
                
            })->where('type_plongeur_id', self::type_club_moniteur_id)
            ->orderBy('created_at', 'DESC')->with("niveau")->paginate(100);

      return view('clubDash.pages.moniteur.index', compact('plongeurs'));
     
    }

    public function moniteurs_inactifs()
    {
    //   $plongeurs = Plongeur::where('type_plongeur_id', self::type_club_moniteur_id)->where('club_id', Auth::user()->club->id)->latest()->get();
    
      $currentYear = Carbon::now()->year;

      $plongeurs = Plongeur::where('club_id', Auth::user()->club->id)
           ->where(function ($query) use ($currentYear) {
           $query->whereNotIn('id', function ($subQuery) {
               $subQuery->select('plongeur_id')->from('licences');
           })
           ->orWhereIn('id', function ($subQuery) use ($currentYear) {
               $subQuery->select('plongeur_id')
                       ->from('licences')
                 ->where('statut', self::statut_refuser)
                 ->whereYear('annee', '!=', $currentYear);
           });
       })
       ->where('type_plongeur_id', self::type_club_moniteur_id)
       ->orderBy('created_at', 'DESC')
       ->with('niveau')
       ->paginate(100);
      return view('clubDash.pages.moniteur.moniteur_inactifs', compact('plongeurs'));
     
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $niveaux = Level::all();
        return view("clubDash.pages.moniteur.ajouter")->with("niveaux", $niveaux);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
// dd($request->input());
            $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|email|unique:plongeurs,email',
            ]);

            $plongeur = new Plongeur();
            $plongeur->nom = $request->nom;
            $plongeur->genre = $request->genre;
            $plongeur->prenom = $request->prenom;
            $plongeur->email = $request->email;
            $plongeur->cin = $request->cin;
            $plongeur->profession = $request->profession;
            $plongeur->telephone_fixe = $request->phone_fix;
            $plongeur->adresse = $request->adresse;
            $plongeur->code_postal = $request->code_postal;
            $plongeur->ville = $request->ville;
            $plongeur->date_de_naissance = $request->date_naissance;
            $plongeur->pays = $request->pays;
            $plongeur->telephone_portable = $request->phone_portable;
            $plongeur->telephone_fixe_diffusable = $request->phone_fixe_diffusable == true ? 1 : 0;
            $plongeur->telephone_portable_diffusable = $request->phone_portable_diffusable == true ? 1 : 0;
            $plongeur->jour_entrainement = $request->jour_entrainement;
            $plongeur->nom_persone_cas_urgence = $request->nom_personne;
            $plongeur->prenom_persone_cas_urgence = $request->prenom_personne;
            $plongeur->email_persone_cas_urgence = $request->email_personne;
            $plongeur->telephone_fixe_persone_cas_urgence  = $request->phone_fixe_personne;
            $plongeur->telephone_portable_persone_cas_urgence = $request->phone_portable_personne;
            $plongeur->lien_parente_persone_cas_urgence = $request->lien_parente_personne;
            // $plongeur->n_licence = $request->n_licence;
            $plongeur->date_visite_medicale = $request->date_visite_medicale;
            $plongeur->id_niveau = $request->niveaux;
            $plongeur->enseignement = $request->enseignement;
            $plongeur->qualifications = $request->qualifications;
            if ($request->password) {
                $plongeur->password = Hash::make($request->password);
            }
            $plongeur->cree_par = Auth::user()->id;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/plongeurs/'), $nomImage);
                $plongeur->image = '/admin/uploads/images/plongeurs/' . $nomImage;
            }
            
            $plongeur->club_id  = Auth::user()->club->id;
            $plongeur->type_plongeur_id   = self::type_club_moniteur_id;

            if ($request->hasFile('cin_document')) {
                $file = $request->cin_document;
                $cin_document = $file->store('cin_document');
                $plongeur->cin_document = $cin_document ?? null;
            }

            if ($request->hasFile('document_medicale')) {
                $file = $request->document_medicale;
                $document_medicale = $file->store('document_medicale');
                $plongeur->document_medicale = $document_medicale ?? null;
            }

            $plongeur->save();

            return response()->json(array('message' => "Plongeur est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(plongeur $plongeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plongeur = Plongeur::find($id);
        $niveaux = Level::all();
        $clubs = Club::orderBy('nom', 'desc')->get();
        $licence = Licence::where('plongeur_id', $id)->where('annee', date('Y'))->where('statut', self::statut_accepter)->first();

        return view("clubDash.pages.moniteur.modifier", compact('plongeur', 'niveaux', 'clubs', 'licence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        try {
            $plongeur = Plongeur::find($id);
            $plongeur->nom = $request->nom;
            $plongeur->genre = $request->genre;
            $plongeur->prenom = $request->prenom;
            $plongeur->email = $request->email;
            $plongeur->cin = $request->cin;
            $plongeur->profession = $request->profession;
            $plongeur->telephone_fixe = $request->phone_fix;
            $plongeur->adresse = $request->adresse;
            $plongeur->code_postal = $request->code_postal;
            $plongeur->ville = $request->ville;
            $plongeur->date_de_naissance = $request->date_naissance;
            $plongeur->pays = $request->pays;
            $plongeur->telephone_portable = $request->phone_portable;
            $plongeur->telephone_fixe_diffusable = $request->phone_fixe_diffusable == true ? 1 : 0;
            $plongeur->telephone_portable_diffusable = $request->phone_portable_diffusable == true ? 1 : 0;
            $plongeur->jour_entrainement = $request->jour_entrainement;
            $plongeur->nom_persone_cas_urgence = $request->nom_personne;
            $plongeur->prenom_persone_cas_urgence = $request->prenom_personne;
            $plongeur->email_persone_cas_urgence = $request->email_personne;
            $plongeur->telephone_fixe_persone_cas_urgence  = $request->phone_fixe_personne;
            $plongeur->telephone_portable_persone_cas_urgence = $request->phone_portable_personne;
            $plongeur->lien_parente_persone_cas_urgence = $request->lien_parente_personne;
            // $plongeur->n_licence = $request->n_licence;
            $plongeur->date_visite_medicale = $request->date_visite_medicale;
            $plongeur->id_niveau = $request->niveaux;
            $plongeur->enseignement = $request->enseignement;
            $plongeur->qualifications = $request->qualifications;
            if ($request->password) {
                $plongeur->password = Hash::make($request->password);
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/plongeurs/'), $nomImage);
                $plongeur->image = '/admin/uploads/images/plongeurs/' . $nomImage;
            }
            $plongeur->cree_par = auth()->user()->id;
            
            // $file = $request->document_medicale;
            // $document_medicale = $file->store('document_medicale');
            // $plongeur->document_medicale = $document_medicale ?? null;

            // $file = $request->cin_document;
            // $cin_document = $file->store('cin_document');
            // $plongeur->cin_document = $cin_document ?? null;

            $plongeur->save();

            return response()->json(array('message' => "Moniteur est modifiée avec succés",), 200);
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
            $deletedPlongeur = Plongeur::where("id", $id)->delete();
            if ($deletedPlongeur <> 0) {
                return response()->json(array('message' => "Plongeur est supprimé avec succés"), 200);
            } else {
                return response()->json(array('message' => "Erreur servenu"), 500);
            }
        } catch (\Exception $err) {
            return response()->json(array('message' => "Erreur servenu"), 500);
        }

    }
}
