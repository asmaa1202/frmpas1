<?php

namespace App\Http\Controllers;

use App\Models\rc;
use App\Models\TypeClub;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(100);
        return view("dashboard.pages.utilisateur.index")->with("utilisateurs", $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.pages.utilisateur.ajouter");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required|string",
            "prenom" => "required|string",
            'email' => 'required|email|max:255|unique:users',
            "password" => "required|confirmed|min:6",
            'password_confirmation' => 'required|min:6',
        ], [
            "nom.required" => "Nom est obligatoire",
            "prenom.required" => "Prénom est obligatoire",
            "email.required" => "E-mail est obligatoire",
            "email.email" => "E-mail est invalid",
            "password.required" => "Mot de passe est obligatoire",
            "password_confirmation.required" => "Confirmation mot de passe est obligatoire",
            "password.min" => "Mot de passe doit contenir six caractères ou plus",
        ]);

        try {
            $nom = $request->nom;
            $prenom = $request->prenom;
            $email = $request->email;
            $password = $request->password;

            $user = new User();

            $user->nom = $nom;
            $user->prenom = $prenom;
            $user->email = $email;
            $user->password = Hash::make($password);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/utilisateurs/'), $nomImage);
                $user->image = 'https://diver.cdma-solution.ma' . '/admin/uploads/images/utilisateurs/' . $nomImage;
            }
            $user->save();

            return response()->json(array('message' => "Utilisateur est ajouté avec succés"), 200);
        } catch (\Exception $err) {
            return response()->json(array('message' => "Utilisateur est non ajouté"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilisateur = User::find($id);
        return view("dashboard.pages.utilisateur.modifier", ["utilisateur" =>  $utilisateur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit($rc)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            "nom" => "required|string",
            "prenom" => "required|string",
            'email' => 'required|email|max:255',
            "password" => "confirmed|min:6|nullable",
            'password_confirmation' => 'min:6|nullable',
        ], [
            "nom.required" => "Nom est obligatoire",
            "prenom.required" => "Prénom est obligatoire",
            "email.required" => "E-mail est obligatoire",
            "email.email" => "E-mail est invalid",
            "password.min" => "Mot de passe doit contenir six caractères ou plus",
        ]);
        try {
            $user = User::find($id);

            $nom = $request->nom;
            $prenom = $request->prenom;
            $email = $request->email;
            $password = $request->password;
            $user->nom = $nom;
            $user->prenom = $prenom;
            $user->email = $email;
            if ($password) {
                $user->password = Hash::make($password);
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $nomImage = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('admin/uploads/images/utilisateurs/'), $nomImage);
                $user->image = 'https://diver.cdma-solution.ma' . '/admin/uploads/images/utilisateurs/' . $nomImage;
            }
            $user->save();

            return response()->json(array('message' => "Utilisateur est modifié avec succés"), 200);
        } catch (\Exception $err) {
            dd($err);
            return response()->json(array('message' => "Utilisateur est non modifié"));
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            User::where("id", $id)->delete();

            return response()->json(array('message' => "Utilisateur est supprimer avec succés"), 200);
        } catch (\Exception $err) {
            dd($err);
            return view(
                "admin.pages.user.create",
                [
                    "error" => "Utilisateur non supprimer"
                ]
            );
        }
    }

    public function myAccount()
    {

        if(isset(Auth::user()->club_id)){
            $type_sportifs = TypeClub::all();
            return view("clubDash.pages.compte.index", compact('type_sportifs'))->with("utilisateur", auth()->user());  
        }
        else{
            return view("dashboard.pages.compte.index")->with("utilisateur", auth()->user());  
        }
    }


    // public function updateAccount(Request $request)
    // {
    //     $request->validate([
    //         "nom" => "required|string",
    //         "prenom" => "required|string",
    //         'email' => 'required|email|max:255',
    //         "password" => "confirmed|min:6|nullable",
    //         'password_confirmation' => 'min:6|nullable',
    //     ], [
    //         "nom.required" => "Nom est obligatoire",
    //         "prenom.required" => "Prénom est obligatoire",
    //         "email.required" => "E-mail est obligatoire",
    //         "email.email" => "E-mail est invalid",
    //         "password.min" => "Mot de passe doit contenir six caractères ou plus",
    //     ]);
    //     try {
    //         $user = User::find(auth()->user()->id);

    //         $nom = $request->nom;
    //         $prenom = $request->prenom;
    //         $email = $request->email;
    //         $password = $request->password;

    //         $user->nom = $nom;
    //         $user->prenom = $prenom;
    //         $user->email = $email;
    //         if ($password) {
    //             $user->password = Hash::make($password);
    //         }
    //         if ($user->club_id) {
    //             $user->club->nom = $request->nom_club;
    //             $user->date_creation = $request->date_creation;
    //             // $user->tel_club = $request->tel_club;
    //             // $user->type_sportifs = $request->type_sportifs;
    //             // $user->is_federal = $request->is_federal;
    //         }
    //         $user->club->save();
    //         $user->save();

    //         return response()->json(array('message' => "Votre compte est modifié avec succés"), 200);
    //     } catch (\Exception $err) {
    //         return response()->json(array('message' => "Votre compte est non modifié"));
    //     }
    // }
    public function updateAccount(Request $request)
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Définir les règles de validation communes
        $rules = [
            "nom" => "required|string",
            "prenom" => "required|string",
            "email" => "required|email|max:255",
            "password" => "nullable|confirmed|min:6",
        ];

        $messages = [
            "nom.required" => "Nom est obligatoire",
            "prenom.required" => "Prénom est obligatoire",
            "email.required" => "E-mail est obligatoire",
            "email.email" => "E-mail est invalide",
            "password.min" => "Le mot de passe doit contenir au moins six caractères",
            "password.confirmed" => "La confirmation du mot de passe ne correspond pas",
        ];

        // Ajouter des règles supplémentaires si l'utilisateur est lié à un club
        // if ($user->club_id) {
        //     $rules = array_merge($rules, [
        //         "nom_club" => "required|string",
        //         // "date_creation" => "required|date",
        //         // "tel_club" => "nullable|string",
        //         // "type_sportifs" => "nullable|array",
        //         // "is_federal" => "nullable|boolean",
        //     ]);
        // }

        // Valider les données
        $request->validate($rules, $messages);

        try {
            // Mettre à jour les informations utilisateur
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->email = $request->email;

            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            // Mettre à jour les informations du club si l'utilisateur est lié à un club
            if ($user->club_id) {
                $user->club->nom = $request->nom_club;
                $user->club->date_creation = $request->date_creation;
                $user->club->tel = $request->tel_club;
                $user->club->types = $request->type_sportifs;
                $user->club->is_federal = $request->is_federal ? 1 : 0;
            }

            $user->club->save();
            $user->save();

            return response()->json(['message' => "Votre compte a été modifié avec succès"], 200);
        } catch (\Exception $err) {
            return response()->json(['message' => "Une erreur s'est produite lors de la modification de votre compte"], 500);
        }
    }
}