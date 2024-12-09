<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Club;
use App\Models\TypeClub;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const region_nord = 'nord'; 
    const region_centre = 'centre'; 
    const region_sud = 'sud';
    const statut_accepter = 'accepter';
    const statut_refuser = 'refuser';
    // public function index()
    // {
    //     $clubs = Club::latest()->get();
    //     return view("dashboard.pages.clubs.club", compact('clubs'));
    // }

    public function index()
    {

        $currentYear = Carbon::now()->year;
        
        $clubs = Club::whereIn('id', function ($query) use ($currentYear) {
            $query->select('club_id')
                  ->from('adhesions')
                  ->where('statut', self::statut_accepter)
                  ->where('annee', $currentYear);
                  
        })
        // ->where('type_club_id', self::type_club_diving_id)
        ->latest()->paginate(100);

        return view("dashboard.pages.clubs.club", compact('clubs'));
    }

    public function clubsInactifs()
    {

        $currentYear = Carbon::now()->year;
        
        $clubs = Club::where(function ($query) use ($currentYear) {
            // Plongeurs sans aucune licence
            $query->whereNotIn('id', function ($subQuery) {
                $subQuery->select('club_id')->from('adhesions');
            })
            ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                $subQuery->select('club_id')
                        ->from('adhesions')
                        ->whereYear('statut', self::statut_refuser)
                        ->whereYear('annee', '!=', $currentYear);
            });
        })
        ->orderBy('created_at', 'DESC')
        ->paginate(100);

        return view("dashboard.pages.clubs.club-inactifs", compact('clubs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_sportifs = TypeClub::all();
        return view("dashboard.pages.clubs.create", compact('type_sportifs'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
               
         

            $club = new Club();
            $club->nom = $request->nom_club;
            $club->email = $request->email_club;
            $club->ville = $request->ville_club;
            $club->date_creation = $request->date_creation;
            $club->tel = $request->tel_club;
            $club->adresse = $request->adresse_club;
            $club->cp = $request->code_postal;
            $club->region = $request->region;
            $club->is_federal = $request->is_federal ? 1 : 0;
            $club->is_active = 1;

            $club->types = $request->types;

            if ($request->hasFile('image_club')) {
                $image = $request->file('image_club');
                if ($image->isValid()) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('admin/uploads/images/clubs'), $imageName);
                    $club->image = '/admin/uploads/images/clubs/' . $imageName;
                } else {
                    return response()->json(['message' => 'L\'image n\'est pas valide.'], 400);
                }
            }
            $file = $request->document;
            $club_document = $file->store('documents');
            $club->document = $club_document ?? null;

            $club->save();

            $regionCode = '';
            if (strtolower($club->region) === 'nord') {
                $regionCode = 'N';
            } elseif (strtolower($club->region) === 'centre') {
                $regionCode = 'C';
            } elseif (strtolower($club->region) === 'sud') {
                $regionCode = 'S';
            }
            
            $club->custom_id = $club->abreviation . "-" . $regionCode . $club->id;
            $club->save();
            
            $user = new User();
            
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            // $user->cin = $request->cin;
            // $user->date_naissance = $request->date_naissance;
            // $user->tel_portable = $request->tel_portable;
            // $user->tel_fixe = $request->tel_fixe;
            $user->email = $request->email_personnel;
            $user->password = Hash::make($request->password);
            $user->club_id = $club->id;
            $user->role_id = 2;
            $user->active = 1;
            $user->save();
    
            return response()->json(['message' => 'Le club a été ajouté avec succès'], 200);
    
        } catch (\Exception $err) {
            return response()->json(['message' => 'Erreur serveur: ' . $err->getMessage()], 500);
        }
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Club $club)
    {
        $user = User::where('club_id', $club->id)->firstOrFail();
        $type_sportifs = TypeClub::all();
        return view("dashboard.pages.clubs.edit", compact('club', 'user', 'type_sportifs'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     try {
    //         $club = Club::find($id);
    //         if($request->is_federal == FALSE){
    //             $test = 0;
    //         }else{
    //             $test = 1;
    //         }
                   
    //         $club->nom = $test;
    //         $club->email = $request->email_club;
    //         $club->ville = $request->ville_club;
    //         $club->date_creation = $request->date_creation;
    //         $club->tel = $request->tel_club;
    //         $club->adresse = $request->adresse_club;
    //         $club->cp = $request->code_postal;
    //         $club->region = $request->region;
    //         if ($request->hasFile('image_club')) {
    //             $image = $request->file('image_club');
    //             if ($image->isValid()) {
    //                 $imageName = time() . '.' . $image->getClientOriginalExtension();
    //                 $image->move(public_path('admin/uploads/images/clubs'), $imageName);
    //                 $club->image = '/admin/uploads/images/clubs/' . $imageName;
    //             } else {
    //                 return response()->json(['message' => 'L\'image n\'est pas valide.'], 400);
    //             }
    //         }
    //         $club->is_federal = $test;
    //         $club->save();

    //         $user = User::where('club_id', $club->id)->firstOrFail();
            
    //         $user->nom = $request->nom;
    //         $user->prenom = $request->prenom;
    //         // $user->cin = $request->cin;
    //         // $user->date_naissance = $request->date_naissance;
    //         // $user->tel_portable = $request->tel_portable;
    //         // $user->tel_fixe = $request->tel_fixe;
    //         $user->email = $request->email_personnel;
    //         if ($request->password) {
    //             $user->password = Hash::make($request->password);
    //         }
    //         // $user->password = Hash::make($request->password);
    //         $user->club_id = $club->id;
    //         $user->role_id = 2;
           
    //         $user->save();

    //         return response()->json(array('message' => $request->is_federal), 200);
    //     } catch (\Exception $err) {
    //         return response()->json(array('message' => $err), 500);
    //     }
    // }
    public function update(Request $request, string $id)
    {
        //dd($request->input());
        try {
            $club = Club::find($id);
    
            // Vérifier si 'is_federal' est vrai ou faux
            $test = $request->is_federal === 'true' ? 1 : 0;
            
            // Mettre à jour les autres champs du club
            $club->nom = $request->nom_club;
            $club->email = $request->email_club;
            $club->ville = $request->ville_club;
            $club->date_creation = $request->date_creation;
            $club->tel = $request->tel_club;
            $club->adresse = $request->adresse_club;
            $club->cp = $request->code_postal;
            $club->region = $request->region;
            $club->types = $request->types;
    
            // Vérification et téléchargement de l'image
            if ($request->hasFile('image_club')) {
                $image = $request->file('image_club');
                if ($image->isValid()) {
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('admin/uploads/images/clubs'), $imageName);
                    $club->image = '/admin/uploads/images/clubs/' . $imageName;
                } else {
                    return response()->json(['message' => 'L\'image n\'est pas valide.'], 400);
                }
            }
    
            // Mise à jour de 'is_federal'
            $club->is_federal = $test;
            $club->save();
    
            // Mise à jour de l'utilisateur associé au club
            $user = User::where('club_id', $club->id)->firstOrFail();
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->email = $request->email_personnel;
            
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
    
            $user->club_id = $club->id;
            $user->role_id = 2; // Assigner un rôle spécifique à l'utilisateur
            $user->save();
    
            return response()->json(array('message' => 'Le club a été modifié avec succès.'), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => $err->getMessage()), 500);
        }
    }
    

    public function toggleActivation(String $id)
    {

        $club = Club::findOrFail($id);

        $etat_active = $club->is_active;
        $club->is_active = !$etat_active;
        $club->user->active = !$etat_active;

        $club->user->save();
        $club->save();

        return redirect()->route('clubs.index')->with('success', 'Le statut du club a été mis à jour avec succès.');
    }

    // public function readDocument(String $id)
    // {

    //     $club = Club::findOrFail($id);

    //     $etat_active = $club->is_active;
    //     $club->is_active = !$etat_active;
    //     $club->user->active = !$etat_active;

    //     $club->user->save();
    //     $club->save();

    //     return redirect()->route('clubs.index')->with('success', 'Le statut du club a été mis à jour avec succès.');
    // }

    // public function readDocument(String $id)
    // {
    //     try {
    //         $club = Club::findOrFail($id);

    //         $rib_document = storage_path('app/' . $club->document);

    //         if (Storage::exists($club->document)) {
    //             $content = Storage::get($club->document);
    //             return response($content)
    //                 ->header('Content-Type', Storage::mimeType($club->document))
    //                 ->header('Content-Disposition', 'inline; filename="' . $club->document . '"');
    //         } else {
    //             return response()->json(['message' => 'Fichier introuvable'], 404);
    //         }
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'An error occurred while creating the SuperAdminLivraison.' . $e->getMessage());
    //     }
    // }
    public function readDocument(String $id)
    {
        try {
            $club = Club::findOrFail($id);

            // Vérifiez si le document existe dans la base de données
            if (empty($club->document)) {
                return response()->json(['message' => 'Aucun document associé à ce club'], 404);
            }

            // Vérifiez si le fichier existe dans le système de stockage
            if (Storage::exists($club->document)) {
                $content = Storage::get($club->document);
                return response($content)
                    ->header('Content-Type', Storage::mimeType($club->document))
                    ->header('Content-Disposition', 'inline; filename="' . basename($club->document) . '"');
            } else {
                return response()->json(['message' => 'Fichier introuvable'], 404);
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Une erreur est survenue lors de la lecture du document : ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        try {
            $club = Club::find($id);
            $club->delete(); // Suppression du club
            $user = User::where('club_id', $id)->firstOrFail();
            $user->delete();
            return redirect()->route('clubs.index')->with('success', 'Le club a été supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->route('clubs.index')->with('error', 'Une erreur est survenue lors de la suppression.');
        }
    }
}
