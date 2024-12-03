<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserAPI;
use App\Models\Level;
use App\Models\Calendrier;
use App\Models\Blog;
use App\Models\Cours;
use App\Models\CalendrierPlongeur;
use App\Models\CarnetPlongeeDetails;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Auth;
use DB;
use Validator;

class PlongeurController extends Controller
{

    public function loginUser(Request $request): Response
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return Response(['message' => $validator->errors()], 401);
        }

        if (Auth::guard('plongeurs')->attempt($request->all())) {

            $plongeur = Auth::guard('plongeurs')->user();

            $success =  $plongeur->createToken('asaam')->plainTextToken;

            $plongeur->token = $success;

            return Response($plongeur, 200);
        }

        return Response(['message' => 'E-mail ou mot de passe erroné'], 401);
    }

    public function coursPlongeurApi($id_niveau)
    {
        $cours = Cours::with('niveau')->with("createur")->where("id_niveau", "=", $id_niveau)->orderBy('order', 'ASC')->get();
        foreach ($cours as $item) {
            $icon = explode('.', $item->lien)[count(explode('.', $item->lien)) - 1];
            switch ($icon) {
                case 'pdf':
                    $item->icon = asset('dashboard/uploads/images/icons/pdf.png');
                    break;
                case 'mp4':
                    $item->icon =  asset('dashboard/uploads/images/icons/video.png');
                    break;
                default:
                    $item->icon =  asset('dashboard/uploads/images/icons/png.png');
                    break;
            }
        }
        return $cours;
    }

    public function logout(): Response
    {
        $plongeur = Auth::guard('plongeurs')->user();

        $plongeur->currentAccessToken()->delete();

        return Response(['data' => 'User Logout successfully.'], 200);
    }


    public function infoPlongeur(Request $request)
    {
        $countFormation = count(DB::select('
            select distinct exercices.id
            from cdmasoluma_diver.exercices
            left join calendrier_exercices on calendrier_exercices.id_exercice = exercices.id
            inner join calendriers on calendriers.id = calendrier_exercices.id_calendrier
            inner join levels on levels.id = exercices.id_niveau
            inner join calendrier_plongeurs on calendrier_plongeurs.id_calendrier = calendriers.id
            where calendrier_plongeurs.id_plongeur = '.Auth()->user()->id.' and exercices.obligatoire = 1
            order by  calendrier_exercices.created_at desc'
        ));
        $calendriers = count(CarnetPlongeeDetails::where('id_plongeur', '=', auth()->user()->id)->get());

        $response = auth()->user();
        $response->nombre_formation = $countFormation;
        $response->nombre_formation = $countFormation;
        $response->nombre_calendrier = $calendriers;
        return Response($response);
    }


    public function getNiveaux()
    {
        $nivaux = Level::all();
        return $nivaux;
    }

    public function getCalendriers()
    {
        $calendriers = CalendrierPlongeur::where('id_plongeur', '=', auth()->user()->id)->with('plongeur')->with('calendrier', function ($query) {
            return $query->with('exercices')->with('encadrant');
        })->get();
        return $calendriers;
    }

    public function getCarnetDePlongee()
    {
        $calendriers = CarnetPlongeeDetails::where('id_plongeur', '=', auth()->user()->id)->with('carnetPlongee', function($query) {
            $query->with("directeur")->with("instructeur");
        })->with('createur')->get();
        return $calendriers;
    }

    public function getBlogs()
    {
        $blogs = Blog::all();
        return $blogs;
    }

    public function getPlongeurs()
    {
        $plongeurs = Plongeur::all();
        return $plongeurs;
    }

    public function getExercicesParPlongeur($id_niveau)
    {
        $exercices = DB::select('select
        exercices.id,
        exercices.label,
        exercices.obligatoire,
        exercices.id_niveau,
        levels.label as niveau,
        exercice_plongeur_statuts.validee,
        exercice_plongeur_statuts.validee_par as id_validateur,
        calendriers.id as id_calendrier,
        calendriers.titre as calendrier,
   		concat(validateur.nom, " ", validateur.prenom) as validee_par,
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
        where calendrier_plongeurs.id_plongeur = '.Auth()->user()->id.' and levels.id = '.$id_niveau.'
        order by  calendrier_exercices.created_at desc'
        );

        return $exercices;
    }

    public function accepterOuRefuserCalendrier(Request $request)
    {
        try {
            $calendrierPlongeur = CalendrierPlongeur::where('id_plongeur', '=', auth()->user()->id)->where('id_calendrier', '=', $request->id_calendrier)->first();
            $calendrierPlongeur->accepter = $request->accepter;
            $calendrierPlongeur->la_cause = $request->la_cause;
            $calendrierPlongeur->save();

            return $calendrierPlongeur;
        } catch(\Exception $err){
            return $err;
        }
    }
}