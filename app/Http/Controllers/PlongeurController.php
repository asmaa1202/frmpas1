<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\CarnetPlongee;
use Carbon\Carbon;
use App\Models\Club;
use App\Models\Plongeur;
use App\Models\Level;
use App\Models\User;
use App\Models\SuiviPrepa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class PlongeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const type_club_sportif_id = 1; 
    const type_club_diving_id = 2; 
    const statut_accepter = 'accepter';
    const statut_refuser = 'refuser';

    public function index()
    {
        // $plongeurs = Plongeur::where('type_club_id', self::type_club_diving_id)->orderBy('created_at', 'DESC')->with("niveau")->paginate(100)->map(function ($plongeur) {
        //     $plongeur->has_active_licence = $plongeur->hasActiveLicence();
        //     return $plongeur;
        // });
        $currentYear = Carbon::now()->year;
        
        $plongeurs = Plongeur::whereIn('id', function ($query) use ($currentYear) {
            $query->select('plongeur_id')
                  ->from('licences')
                  ->where('statut', self::statut_accepter)
                  ->where('annee', $currentYear);
                  
        })->where('type_club_id', self::type_club_diving_id)
        ->orderBy('created_at', 'DESC')->with("niveau")->paginate(100);

        return view("dashboard.pages.plongeur.index")->with("plongeurs", $plongeurs);
    }

    public function plongeurs_inactifs()
    {
        // $plongeurs = Plongeur::where('type_club_id', self::type_club_diving_id)->orderBy('created_at', 'DESC')->with("niveau")->paginate(100)->map(function ($plongeur) {
        //     $plongeur->has_active_licence = $plongeur->hasActiveLicence();
        //     return $plongeur;
        // });
        $currentYear = Carbon::now()->year;

       $plongeurs = Plongeur::where(function ($query) use ($currentYear) {
            // Plongeurs sans aucune licence
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
        ->where('type_club_id', self::type_club_diving_id)
        ->orderBy('created_at', 'DESC')
        ->with('niveau')
        ->paginate(100);
// dd($plongeurs);
        return view("dashboard.pages.plongeur.plongeurs-inactifs")->with("plongeurs", $plongeurs);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $niveaux = Level::all();
        $clubs = Club::orderBy('nom', 'desc')->get();
        return view("dashboard.pages.plongeur.ajouter", compact('niveaux', 'clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // dd($request->club);
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
            $plongeur->n_licence = $request->n_licence;
            $plongeur->date_visite_medicale = $request->date_visite_medicale;
            $plongeur->id_niveau = $request->niveaux;
            $plongeur->enseignement = $request->enseignement;
            $plongeur->qualifications = $request->qualifications;
            if ($request->password) {
                $plongeur->password = Hash::make($request->password);
            }
            $plongeur->cree_par = auth()->user()->id;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/plongeurs/'), $nomImage);
                $plongeur->image = '/admin/uploads/images/plongeurs/' . $nomImage;
            }
            $plongeur->club_id  = $request->club;
            $plongeur->type_club_id   = self::type_club_diving_id;

            $plongeur->save();

            return response()->json(array('message' => "Plongeur est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err), 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $plongeur = Plongeur::with('formations')->with('carnet_plongee_details.equipe')->with("createur")->find($id);
//         return $plongeur;
        return view("dashboard.pages.plongeur.details", ["plongeur" => $plongeur]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plongeur = Plongeur::find($id);
        $niveaux = Level::all();
        $clubs = Club::orderBy('nom', 'desc')->get();

        return view("dashboard.pages.plongeur.modifier", compact('plongeur', 'niveaux', 'clubs'));
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
            $plongeur->n_licence = $request->n_licence;
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
            $plongeur->club_id  = $request->club;
            $plongeur->save();

            return response()->json(array('message' => "Plongeur est modifiée avec succés",), 200);
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

    //
    public function infoPersonnel(Request $request)
    {
        $count_formations = Formation::where('id_plongeur', '=', auth()->user()->id)->get();
        $count_carnets_de_plongee = CarnetPlongee::whereHas('equipePlongeur', function ($query) {
            return $query->where('id_plongeur', '=', auth()->user()->id);
        })->get();

        return view("plongeurDash.pages.mon-compte")->with("plongeur", auth()->user())->with("count_formations", count($count_formations))->with("count_carnets_de_plongee", count($count_carnets_de_plongee));
    }

    public function getAllPlongeurs()
    {
        $plongeurs = Level::with("plongeurs")->get();
        return $plongeurs;
    }

    public function getPlongeursParNiveau($id_niveau)
    {
        $plongeurs = Plongeur::where("id_niveau", $id_niveau)->get();
        return $plongeurs;
    }

    public function suiviPrepaNiveau1($id_plongeur)
    {
        $users = User::all();
        $niveaux = Level::all();
        $plongeur = Plongeur::where("id", $id_plongeur)->first();
        $suiviPrepa = SuiviPrepa::where("id_plongeur", $id_plongeur)->where("id_niveau", 1)->get();
        return view("dashboard.pages.plongeur.suivi-prepa-niveau1")->with("users", $users)->with("niveaux", $niveaux)->with("plongeur", $plongeur)->with("suiviPrepa", $suiviPrepa);
    }

    public function suiviPrepaNiveau2($id_plongeur)
    {
        $users = User::all();
        $niveaux = Level::all();
        $plongeur = Plongeur::where("id", $id_plongeur)->first();
        $suiviPrepa = SuiviPrepa::where("id_plongeur", $id_plongeur)->where("id_niveau", 2)->get();
        return view("dashboard.pages.plongeur.suivi-prepa-niveau2")->with("users", $users)->with("niveaux", $niveaux)->with("plongeur", $plongeur)->with("suiviPrepa", $suiviPrepa);
    }

    public function suiviPrepaNiveau3($id_plongeur)
    {
        $users = User::all();
        $niveaux = Level::all();
        $plongeur = Plongeur::where("id", $id_plongeur)->first();
        $suiviPrepa = SuiviPrepa::where("id_plongeur", $id_plongeur)->where("id_niveau", 3)->get();
        return view("dashboard.pages.plongeur.suivi-prepa-niveau3")->with("users", $users)->with("niveaux", $niveaux)->with("plongeur", $plongeur)->with("suiviPrepa", $suiviPrepa);
    }

    public function suiviPrepaNiveau4($id_plongeur)
    {
        $users = User::all();
        $niveaux = Level::all();
        $plongeur = Plongeur::where("id", $id_plongeur)->first();
        $suiviPrepa = SuiviPrepa::where("id_plongeur", $id_plongeur)->where("id_niveau", 4)->get();
        return view("dashboard.pages.plongeur.suivi-prepa-niveau4")->with("users", $users)->with("niveaux", $niveaux)->with("plongeur", $plongeur)->with("suiviPrepa", $suiviPrepa);
    }

    public function formationsPlongeur($id_plongeur, $id_niveau)
    {
        $plongeur = Plongeur::where("id", $id_plongeur)->first();
        $niveaux = Level::all();

        $exercices = DB::select('select
        exercices.id,
        exercices.label,
        exercices.obligatoire,
        exercices.id_niveau,
        levels.label as niveau,
        exercice_plongeur_statuts.validee,
        exercice_plongeur_statuts.validee_par,
        calendriers.id as id_calendrier,
        calendriers.titre as calendrier,
   		concat(validateur.nom, " ", validateur.prenom) as validateur,
        calendriers.id as id_calendrier,
        calendriers.titre as calendrier,
        concat(encadrant.nom, " ", encadrant.prenom) as encadrant,
        calendrier_exercices.created_at as cree_le
         from cdmasoluma_diver.exercices
        left join calendrier_exercices on calendrier_exercices.id_exercice = exercices.id
        inner join calendriers on calendriers.id = calendrier_exercices.id_calendrier
        left join users as encadrant on encadrant.id = calendriers.id_encadrant
        inner join levels on levels.id = exercices.id_niveau
        inner join calendrier_plongeurs on calendrier_plongeurs.id_calendrier = calendriers.id
        left join exercice_plongeur_statuts on exercice_plongeur_statuts.id_exercice = exercices.id and exercice_plongeur_statuts.id_plongeur = 302 and exercice_plongeur_statuts.id_calendrier = calendriers.id
      	left join users as validateur on validateur.id = exercice_plongeur_statuts.validee_par
        where calendrier_plongeurs.id_plongeur = '.$id_plongeur.' and levels.id = '.$id_niveau.'
        order by  calendrier_exercices.created_at desc'
        );
        return view("dashboard.pages.plongeur.formations")->with("plongeur",$plongeur)->with("exercices", $exercices)->with("niveaux", $niveaux);
    }
}