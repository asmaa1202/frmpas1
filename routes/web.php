<?php

use App\Http\Controllers\Accueil\AccueilController;
use App\Http\Controllers\Accueil\ActualiteController;
use App\Http\Controllers\Accueil\EvenementController;
use App\Http\Controllers\Accueil\GalerieController;
use App\Http\Controllers\Accueil\PlongeeController;
use App\Http\Controllers\Accueil\SportController;
use App\Http\Controllers\AdhesionController;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\Auth\PlongeurLoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlongeurController;
use App\Http\Controllers\CarnetPlongeeDetailsEnteteController;
use App\Http\Controllers\Club\AdhesionClubController;
use App\Http\Controllers\Club\AthleteClubController;
use App\Http\Controllers\Club\HomeController;
use App\Http\Controllers\Club\PlongeurClubController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EquipePlongeurController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExerciceController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SuiviPrepaController;
use App\Http\Controllers\ExercicePlongeurStatutController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\Plongeur\HomePlongeurController;
use App\Http\Controllers\Plongeur\LicencePlongeurController;
use App\Models\Plongeur;
use App\Models\Club;
use Carbon\Carbon;
use App\Constants\ClubStatutConstants;
use App\Http\Controllers\Club\ClubLicenceController;
use App\Http\Controllers\SportType;
use App\Http\Controllers\Club\MoniteurClubController;
use App\Http\Controllers\MoniteurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calendrier-Federale', function () {
    return view('calendrier');
})->name('calendrier.federale');

Route::get('/calendar', function () {
    return view('calendar2');
})->name('calendar2.federale');

Route::get('/diving', [SportType::class, 'index'])->name('sport.diving');
Route::get('/finswimming', [SportType::class, 'ffinswimming'])->name('sport.finswimming');
Route::get('/freediving', [SportType::class, 'ffreediving'])->name('sport.freediving');
Route::get('/visual', [SportType::class, 'visual'])->name('sport.visual');
Route::get('/', [AccueilController::class, 'welcome'])->name('welcome');

/*
Route::get('make', function (){
    // mouvement_stock_entrees
    Composer::class('require mailersend/laravel-driver');
    return 'ok';
});

Route::get('mvc', function (){
    // mouvement_stock_entrees
    Artisan::call('route:clear');
});

 Route::get('fresh', function (){
     Artisan::call('migrate:fresh');
 });

 Route::get('rollback', function (){
     Artisan::call('migrate:rollback');
 });

 Route::get('migration', function (){
     Artisan::call('make:migration create_users_type_documents');
 });


 Route::get('model', function (){
     Artisan::call('make:model ExercicePlongeurStatut -mcr');
 });


 Route::get('controller', function (){
 //   Artisan::call('make:controller VenteController');
     Artisan::call('make:controller BonCommandeAchatController --resource');
 });

 Route::get('controllerr', function (){
     Artisan::call('make:controller ContactController');
 });

 Route::get('provider', function (){
     Artisan::call('make:provider ComposerServiceProvider');
 });

 Route::get('repository', function (){
     Artisan::call('make:repository ReferenceRepository');
 });



 Route::get('modelcontroller', function (){
     Artisan::call('make:model statusPaiement --migration');
 });

 Route::get('resource', function (){
     Artisan::call('make:resource NatureArticleResource');
 });

 Route::get('rule', function (){
     Artisan::call('make:rule ArticleType');
 });*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


 Route::get('/clear', function() {
     Artisan::call('cache:clear');
     Artisan::call('config:clear');
     Artisan::call('route:clear');
     Artisan::call('view:clear');
     return "Cleared!";
 });*/


// le-mot-du-president
Route::get('/le-mot-du-president', [AccueilController::class, 'mot_president'])->name('mot.president');

// about
Route::get('/a-propos-de-nous', [AccueilController::class, 'about'])->name('frmpas.about');

// l'équipe de federation'
Route::get('/frmpas-family', [AccueilController::class, 'frmpas_family'])->name('frmpas.family');

// les_activités_subaquatiques
Route::get('/les_activités_subaquatiques', [AccueilController::class, 'activites_subaquatiques'])->name('activites.subaquatiques');

// commissions
Route::get('/commissions', [AccueilController::class, 'commissions'])->name('commissions');

//contact
Route::get('/contact', [AccueilController::class, 'contact'])->name('contact');
Route::post('contactus/store', [AccueilController::class, 'storeContactUs'])->name('contact.us.store');

//sport
Route::get('/sport/club', [SportController::class, 'club'])->name('sport.club');
Route::get('/sport/competition', [SportController::class, 'competition'])->name('sport.competition');
Route::get('/sport/competition/download-document/{filename}', [SportController::class, 'downloadDocument'])->name('download.document');


//plongée
Route::get('/plongee/club', [PlongeeController::class, 'club'])->name('plongee.club');
Route::get('/plongee/formation', [PlongeeController::class, 'formation'])->name('plongee.formation');

// actualites
Route::get('/actualites', [ActualiteController::class, 'actualites'])->name('actualites');
Route::get('/actualites/show/{hash}', [ActualiteController::class, 'show'])->name('actualites.show');

// evenements
Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
Route::get('/evenements/show/{hash}', [EvenementController::class, 'show'])->name('evenements.show');

// galerie
Route::get('/galerie', [GalerieController::class, 'galerie'])->name('galerie');
Route::get('/galerie/detail', [GalerieController::class, 'detail_galerie'])->name('detail.galerie');








// Route::get('/', function () {
//     return view('home');
// })->name('client.home');
// Route::get('/a-propos', function () {
//     return view('aPropos');
// })->name('client.aPropos');
// Route::get('/contact', function () {
//     return view('contact');
// })->name('client.contact');
// Route::get('/natation', function () {
//     return view('natation');
// })->name('client.natation');
// Route::get('/ecole-asaam', function () {
//     return view('wedive');
// })->name('client.wedive');
// Route::get('/blog', function () {
//     return view('blog');
// })->name('client.blog');
// Route::get('/natation', function () {
//     return view('natation');
// })->name('client.natation');
// Route::get('/adhesion', function () {
//     return view('adhesion');
// })->name('client.adhesion');

// Route::post('/adhesion', [AdhesionController::class, 'store'])->name('adhesion.store');
// Route::post("/contact", [ContactController::class, "store"])->name('contacts.store');
// Route::get("/blogs/la-plongée-au-maroc-entre-mediterranée-et-atlantique", function () {
//     return view('blog1');
// })->name('blogs.blog1');
// Route::get("/blogs/evolution-du-materiel-de-plongee-sous-marine-un-voyage-technologique", function () {
//     return view('blog2');
// })->name('blogs.blog2');
// Route::get("/blogs/la-plongee-sous-marine-une-fenetre-vers-un-monde-cache", function () {
//     return view('blog3');
// })->name('blogs.blog3');
// Route::get("/blogs/plongee-sous-marine-un-voyage-a-travers-les-formations-mondiales", function () {
//     return view('blog4');
// })->name('blogs.blog4');

// Route::get("/conditions-générales-et-mentions-légales", function () {
//     return view('conditionsGenerales');
// })->name('conditionsGenerales');
// ======================================== Dashboard =========================================
Auth::routes();
Route::post('logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
// Route::middleware(['middleware' => ['auth','role:1']])->group(function () {
Route::middleware(['auth', 'role:1'])->group(function () {

    Route::get("/dashboard/home", function () {
        $countHommePlongeur = Plongeur::where('genre', '=', 'Homme')->get()->count();
        $countFemmePlongeur = Plongeur::where('genre', '=', 'Femme')->get()->count();
        $countEnfantPlongeur = Plongeur::where('genre', '=', 'Enfant')->get()->count();

        $countNiveau1Plongeur = Plongeur::where('id_niveau', '=', 1)->get()->count();
        $countNiveau2Plongeur = Plongeur::where('id_niveau', '=', 2)->get()->count();
        $countNiveau3Plongeur = Plongeur::where('id_niveau', '=', 3)->get()->count();
        $countNiveau4Plongeur = Plongeur::where('id_niveau', '=', 4)->get()->count();
        $currentYear = date('Y');
    
        // Clubs actifs : Club ID est présent dans la table adhésions avec statut "accepter"
        $clubsActifs = Club::whereHas('adhesions', function ($query) use ($currentYear) {
            $query->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                  ->where('annee', $currentYear);
        })->count();
    
        // $clubsInactifs = Club::whereHas('adhesions', function ($query) use ($currentYear) {
        //     $query->whereIn('statut', [ClubStatutConstants::STATUT_EN_COURS, ClubStatutConstants::STATUT_REFUSER])
        //           ->where('annee', $currentYear);
        // })->count();
        
        $clubsInactifs = Club::whereHas('adhesions', function ($query) use ($currentYear) {
            $query->whereIn('statut', [ClubStatutConstants::STATUT_EN_COURS, ClubStatutConstants::STATUT_REFUSER])
                  ->where('annee', $currentYear);
        })
        ->orDoesntHave('adhesions') // Inclure les clubs sans adhésions
        ->distinct()->count();

        $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());

        $nombreAthletesActifs = Plongeur::whereIn('id', function ($query) use ($currentYear) {
                    $query->select('plongeur_id')
                                ->from('licences')
                                ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                                ->where('annee', $currentYear);
                                
                    })->where('type_plongeur_id', 1)->count();

        $nombreAthletesInactifs = Plongeur::where(function ($query) use ($currentYear) {
                $query->whereNotIn('id', function ($subQuery) {
                    $subQuery->select('plongeur_id')->from('licences');
                })
                ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                        $subQuery->select('plongeur_id')
                                ->from('licences')
                            ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                            ->whereYear('annee', '!=', $currentYear);
                    });
                })
                ->where('type_plongeur_id', 1)
                ->count();

        $nombrePlongeursActifs = Plongeur::whereIn('id', function ($query) use ($currentYear) {
                $query->select('plongeur_id')
                            ->from('licences')
                            ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                            ->where('annee', $currentYear);
                            
                })->where('type_plongeur_id', 2)->count();
        
        $nombrePlongeursInactifs = Plongeur::where(function ($query) use ($currentYear) {
                    $query->whereNotIn('id', function ($subQuery) {
                        $subQuery->select('plongeur_id')->from('licences');
                    })
                    ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                        $subQuery->select('plongeur_id')
                                ->from('licences')
                            ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                            ->whereYear('annee', '!=', $currentYear);
                    });
                })
                ->where('type_plongeur_id', 2)
                ->count();

        $nombreMoniteursActifs = Plongeur::whereIn('id', function ($query) use ($currentYear) {
            $query->select('plongeur_id')
                        ->from('licences')
                        ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                        ->where('annee', $currentYear);
                        
            })->where('type_plongeur_id', 3)->count();
            
        $nombreMoniteursInactifs = Plongeur::where(function ($query) use ($currentYear) {
                    $query->whereNotIn('id', function ($subQuery) {
                        $subQuery->select('plongeur_id')->from('licences');
                    })
                    ->orWhereIn('id', function ($subQuery) use ($currentYear) {
                        $subQuery->select('plongeur_id')
                                ->from('licences')
                            ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
                            ->whereYear('annee', '!=', $currentYear);
                    });
                })
                ->where('type_plongeur_id', 3)
                ->count();
    
        return view(
            "dashboard.pages.home",
            compact(
                'countHommePlongeur',
                'countFemmePlongeur',
                'countEnfantPlongeur',
                'countNiveau1Plongeur',
                'countNiveau2Plongeur',
                'countNiveau3Plongeur',
                'countNiveau4Plongeur',
                'clubsActifs',
                'clubsInactifs',
                'remainingDays',
                'nombrePlongeursActifs',
                'nombrePlongeursInactifs',
                'nombreAthletesActifs',
                'nombreAthletesInactifs',
                'nombreMoniteursActifs',
                'nombreMoniteursInactifs',

            )
        );
    })->name('admin.index');

    // - Utilisateurs
    Route::get("/dashboard/utilisateurs", [UserController::class, 'index'])->name('utilisateurs.index');
    Route::get("/dashboard/utilisateurs/ajouter", [UserController::class, 'create'])->name('utilisateurs.create');
    Route::get("/dashboard/utilisateurs/modifier/{id}", [UserController::class, 'show'])->name('utilisateurs.show');
    Route::post("/dashboard/utilisateurs", [UserController::class, "store"])->name('utilisateurs.store');
    Route::post("/dashboard/utilisateurs/modifier/{id}", [UserController::class, "update"])->name('utilisateurs.update');
    Route::delete("/dashboard/utilisateurs/{id}", [UserController::class, "destroy"])->name('utilisateurs.destroy');

    // - plongeur
    Route::get("/dashboard/plongeurs", [PlongeurController::class, 'index'])->name('plongeurs.index');
    Route::get("/dashboard/plongeurs-inactifs", [PlongeurController::class, 'plongeurs_inactifs'])->name('plongeurs.inactifs');
    Route::get("/dashboard/plongeurs/api", [PlongeurController::class, 'getAllPlongeurs']);
    Route::get("/dashboard/plongeurs/niveau/{id_niveau}", [PlongeurController::class, 'getPlongeursParNiveau']);
    Route::get("/dashboard/plongeurs/{id}/details", [PlongeurController::class, 'show'])->name('plongeurs.show');
    Route::get("/dashboard/plongeurs/ajouter", [PlongeurController::class, 'create'])->name('plongeurs.create');
    Route::get("/dashboard/plongeurs/modifier/{id}", [PlongeurController::class, 'edit'])->name('plongeurs.show');
    Route::get("/dashboard/plongeurs/{id_plongeur}/niveau/1/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau1'])->name('plongeurs.suiviPrepaN1');
    Route::get("/dashboard/plongeurs/{id_plongeur}/niveau/2/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau2'])->name('plongeurs.suiviPrepaN2');
    Route::get("/dashboard/plongeurs/{id_plongeur}/niveau/3/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau3'])->name('plongeurs.suiviPrepaN3');
    Route::get("/dashboard/plongeurs/{id_plongeur}/niveau/4/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau4'])->name('plongeurs.suiviPrepaN4');
    Route::post("/dashboard/plongeurs", [PlongeurController::class, "store"])->name('plongeurs.store');
    Route::post("/dashboard/plongeurs/modifier/{id}", [PlongeurController::class, "update"])->name('plongeurs.update');
    Route::delete("/dashboard/plongeurs/{id}", [PlongeurController::class, "destroy"])->name('plongeurs.destroy');
    Route::get("/dashboard/plongeurs/{id_plongeur}/formations/niveau/{id_niveau}", [PlongeurController::class, "formationsPlongeur"])->name('plongeurs.formations');
    Route::post("/dashboard/plongeurs/{id_plongeur}/formations/validate", [ExercicePlongeurStatutController::class, "validerFormation"])->name('plongeurs.validerFormation');
    Route::post("/dashboard/plongeurs/{id_plongeur}/formations/reject", [ExercicePlongeurStatutController::class, "refuserFormation"])->name('plongeurs.refuserFormation');
    Route::get("/dashboard/plongeurs/{id}/carnet-de-plongee", [CarnetPlongeeDetailsEnteteController::class, 'carnetPlongeeParPlongeur'])->name('plongeur.carnet_plongee.index');
    Route::get("/dashboard/payement", function () {
        return view("dashboard.pages.payement");
    })->name('payement');
    Route::get("/dashboard/pick", function () {
        return view("dashboard.pages.pick");
    })->name('pick');
    Route::get("/dashboard/cart", function () {
        return view("dashboard.pages.cart");
    })->name('cart');
    // Route::get("/dashboard/clubs", function () {
    //     return view("dashboard.pages.club");
    // })->name('clubs.index');

    // - Athlète
    Route::get("/dashboard/athletes", [AthleteController::class, 'index'])->name('athletes.index');
    Route::get("/dashboard/athletes-inactifs", [AthleteController::class, 'athletes_inactifs'])->name('athletes.inactifs');
    Route::get("/dashboard/athletes/ajouter", [AthleteController::class, 'create'])->name('athletes.create');
    Route::post("/dashboard/athletes", [AthleteController::class, 'store'])->name('athletes.store');
    Route::get("/dashboard/athletes/modifier/{club}", [AthleteController::class, 'edit'])->name('athletes.edit');
    Route::post("/dashboard/athletes/modifier/{id}", [AthleteController::class, "update"])->name('athletes.update');
    Route::delete('/dashboard/athletes/{id}', [AthleteController::class, 'destroy'])->name('athletes.destroy');
    Route::post('/dashboard/athletes/{id}/toggle-activation', [AthleteController::class, 'toggleActivation'])->name('clubs.toggleActivation');
    Route::get('/dashboard/document/{id}',[AthleteController::class,'readDocument'])->name('athletes.read.document');


    // - Moniteurs
    Route::get("/dashboard/moniteurs", [MoniteurController::class, 'index'])->name('moniteurs.index');
    Route::get("/dashboard/moniteurs-inactifs", [MoniteurController::class, 'moniteurs_inactifs'])->name('moniteurs.inactifs');
    Route::get("/dashboard/moniteurs/ajouter", [MoniteurController::class, 'create'])->name('moniteurs.create');
    Route::post("/dashboard/moniteurs", [MoniteurController::class, 'store'])->name('moniteurs.store');
    Route::get("/dashboard/moniteurs/modifier/{club}", [MoniteurController::class, 'edit'])->name('moniteurs.edit');
    Route::post("/dashboard/moniteurs/modifier/{id}", [MoniteurController::class, "update"])->name('moniteurs.update');
    Route::delete('/dashboard/moniteurs/{id}', [MoniteurController::class, 'destroy'])->name('moniteurs.destroy');
    Route::post('/dashboard/moniteurs/{id}/toggle-activation', [MoniteurController::class, 'toggleActivation'])->name('clubs.toggleActivation');
    Route::get('/dashboard/document/{id}',[MoniteurController::class,'readDocument'])->name('moniteurs.read.document');

    // - clubs
    Route::get("/dashboard/clubs", [ClubController::class, 'index'])->name('clubs.index');
    Route::get("/dashboard/clubs-inactifs", [ClubController::class, 'clubsInactifs'])->name('clubs.inactifs');
    Route::get("/dashboard/clubs/ajouter", [ClubController::class, 'create'])->name('clubs.create');
    Route::post("/dashboard/clubs", [ClubController::class, 'store'])->name('clubs.store');
    Route::get("/dashboard/clubs/modifier/{club}", [ClubController::class, 'edit'])->name('clubs.edit');
    Route::post("/dashboard/clubs/modifier/{id}", [ClubController::class, "update"])->name('clubs.update');
    Route::delete('/dashboard/clubs/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');
    Route::post('/dashboard/clubs/{id}/toggle-activation', [ClubController::class, 'toggleActivation'])->name('clubs.toggleActivation');
    Route::get('/dashboard/documentj/{id}',[ClubController::class,'readDocument'])->name('club.read.document');



    Route::get("/dashboard/carnet-plongee", [CarnetPlongeeDetailsEnteteController::class, 'index'])->name('carnet_plongee.index');

    // - carnet de plongee
    Route::get("/dashboard/carnet-plongee/ajouter", [CarnetPlongeeDetailsEnteteController::class, 'create'])->name('carnet_plongee.create');
    Route::get("/dashboard/carnet-plongee/modifier/{id}", [CarnetPlongeeDetailsEnteteController::class, 'edit'])->name('carnet_plongee.show');
    Route::post("/dashboard/carnet-plongee", [CarnetPlongeeDetailsEnteteController::class, "store"])->name('carnet_plongee.store');
    Route::post("/dashboard/carnet-plongee/modifier/{id}", [CarnetPlongeeDetailsEnteteController::class, "update"])->name('carnet_plongee.update');
    Route::delete("/dashboard/carnet-plongee/{id}", [CarnetPlongeeDetailsEnteteController::class, "destroy"])->name('carnet_plongee.destroy');
    Route::post("/dashboard/carnet-plongee/{id}/plongeur/ajouter", [CarnetPlongeeDetailsEnteteController::class, 'affectationPlongeur'])->name('carnet_plongee.store.plongeur');
    Route::get("/dashboard/carnet-plongee/{id}/equipes/ajouter", [EquipeController::class, 'index'])->name('equipes.index');
    Route::post("/dashboard/carnet-plongee/{id}/equipes/ajouter", [EquipeController::class, 'store'])->name('equipes.store');
    // Route::delete("/dashboard/carnet-plongee/plongeur/{id}", [EquipePlongeurController::class, 'destroy'])->name('equipe.plongeur.destroy');

    // - Contacts
    Route::get("/dashboard/contacts", [ContactController::class, 'index'])->name('contacts.index');
    Route::delete("/dashboard/contacts/{id}", [ContactController::class, 'destroy'])->name('contacts.destroy');

    // - Formation
    Route::get("/dashboard/formations", [FormationController::class, 'index'])->name('formations.index');
    Route::get("/dashboard/formations/ajouter", [FormationController::class, 'create'])->name('formations.create');
    Route::get("/dashboard/formations/modifier/{id}", [FormationController::class, 'edit'])->name('formations.show');
    Route::post("/dashboard/formations", [FormationController::class, "store"])->name('formations.store');
    Route::put("/dashboard/formations/{id}", [FormationController::class, "update"])->name('formations.update');
    Route::delete("/dashboard/formations/{id}", [FormationController::class, "destroy"])->name('formations.destroy');

    // - Exercice
    Route::get("/dashboard/exercices", [ExerciceController::class, 'index'])->name('exercices.index');
    Route::get("/dashboard/exercices/ajouter", [ExerciceController::class, 'create'])->name('exercices.create');
    Route::get("/dashboard/exercices/modifier/{id}", [ExerciceController::class, 'edit'])->name('exercices.show');
    Route::post("/dashboard/exercices", [ExerciceController::class, "store"])->name('exercices.store');
    Route::put("/dashboard/exercices/{id}", [ExerciceController::class, "update"])->name('exercices.update');
    Route::delete("/dashboard/exercices/{id}", [ExerciceController::class, "destroy"])->name('exercices.destroy');
    Route::get("/dashboard/exercices/niveau/{id_niveau}", [ExerciceController::class, 'exercicesParNiveau']);

    // - blogs
    Route::get("/dashboard/blogs", [BlogController::class, 'index'])->name('blogs.index');
    Route::get("/dashboard/blogs/ajouter", [BlogController::class, 'create'])->name('blogs.create');
    Route::get("/dashboard/blogs/modifier/{id}", [BlogController::class, 'show'])->name('blogs.show');
    Route::post("/dashboard/blogs/ajouter", [BlogController::class, "store"])->name('blogs.store');
    Route::delete("/dashboard/blogs/{id}", [BlogController::class, "destroy"])->name('blogs.destroy');
    Route::post("/dashboard/blogs/modifier/{id}", [BlogController::class, "update"])->name('blogs.update');

    // - cours
    Route::get("/dashboard/cours", [CoursController::class, 'index'])->name('cours.index');
    Route::get("/dashboard/cours/ajouter", [CoursController::class, 'create'])->name('cours.create');
    Route::get("/dashboard/cours/modifier/{id}", [CoursController::class, 'show'])->name('cours.show');
    Route::post("/dashboard/cours/ajouter/", [CoursController::class, 'upload'])->name('chunkUpload');
    Route::delete("/dashboard/cours/{id}", [CoursController::class, "destroy"])->name('cours.destroy');
    Route::post("/dashboard/cours/modifier/{id}", [CoursController::class, "update"])->name('cours.update');

    // - Mon Compte
    Route::get("/dashboard/mon-compte", [UserController::class, "myAccount"])->name('compte.index');
    Route::put("/dashboard/mon-compte", [UserController::class, "updateAccount"])->name('compte.update');

    // - Demandes
    Route::get("/dashboard/demandes-adhesion", [AdhesionController::class, 'index'])->name('demandes.index');
    Route::post("/dashboard/demandes/{id}/{statut}", [AdhesionController::class, 'adhesion_statut'])->name('adhesion.statut');
    Route::delete("/dashboard/demandes/{id}", [AdhesionController::class, "destroy"])->name('demandes.destroy');
    Route::get('/dashboard/document/{id}',[AdhesionController::class,'readDocument'])->name('adhesion.read.document');

    // - Licence
    Route::get("/dashboard/demandes-licence", [LicenceController::class, 'index'])->name('demandes_licence.index');
    Route::post("/dashboard/demandes-licence/{id}/{statut}", [LicenceController::class, 'licence_statut'])->name('demandes_licence.statut');
    Route::delete("/dashboard/demandes-licence/{id}", [LicenceController::class, "destroy"])->name('demandes_licence.destroy');
    Route::get('/dashboard/document/{id}',[LicenceController::class,'readDocument'])->name('licence.read.document');
    // - Calendrier
    Route::get("/dashboard/calendriers", [CalendrierController::class, 'index'])->name('calendriers.index');
    Route::post("/dashboard/calendriers/ajouter", [CalendrierController::class, "store"])->name('calendrier.store');
    Route::get("/dashboard/calendriers/data", [CalendrierController::class, 'fetchCalendriers'])->name('calendriers.fetchCalendriers');
    Route::delete("/dashboard/calendriers/{id}", [CalendrierController::class, "destroy"])->name('calendriers.destroy');

    // - Niveaux
    Route::get("/dashboard/niveaux", [LevelController::class, 'index'])->name('niveaux.index');
});

Route::group(['prefix'=>'club', 'middleware' => ['auth','role:2']],function () {
    // Route::group(['prefix'=>'admin', 'middleware' => ['auth','role:1']],function (){
    
        // Route::get("/home", function () {
        //     return view("clubDash.pages.home");
        // })->name('club.index');
        Route::get("/home", [HomeController::class, "index"])->name('club.index');

        // Route::get("/home", function () {
        
        //     $currentYear = date('Y');
        
        //     // Clubs actifs : Club ID est présent dans la table adhésions avec statut "accepter"
        //     // $clubsActifs = Club::whereHas('adhesions', function ($query) use ($currentYear) {
        //     //     $query->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
        //     //           ->where('annee', $currentYear);
        //     // })->count();
        
        //     // $clubsInactifs = Club::whereHas('adhesions', function ($query) use ($currentYear) {
        //     //     $query->whereIn('statut', [ClubStatutConstants::STATUT_EN_COURS, ClubStatutConstants::STATUT_REFUSER])
        //     //           ->where('annee', $currentYear);
        //     // })->count();
            
        //     // $clubsInactifs = Club::whereHas('adhesions', function ($query) use ($currentYear) {
        //     //     $query->whereIn('statut', [ClubStatutConstants::STATUT_EN_COURS, ClubStatutConstants::STATUT_REFUSER])
        //     //           ->where('annee', $currentYear);
        //     // })
        //     // ->orDoesntHave('adhesions') // Inclure les clubs sans adhésions
        //     // ->count();
    
        //     $remainingDays = Carbon::now()->diffInDays(Carbon::now()->endOfYear());
    
        //     // $nombreAthletes = Plongeur::where('type_plongeur_id', 1)->count();
        //     // $nombreAthletes = Plongeur::whereHas('licence', function ($query) use ($currentYear) {
        //     //         $query->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
        //     //               ->where('annee', $currentYear);
        //     //     })->count();



        //     $nombrePlongeursActifs = Plongeur::whereIn('id', function ($query) use ($currentYear) {
        //         $query->select('plongeur_id')
        //                 ->from('licences')
        //                 ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
        //                 ->where('annee', $currentYear);
                        
        //     })->where('type_plongeur_id', 2)->count();
        //     // dd($nombrePlongeursActifs);


        //     $nombrePlongeursInactifs = Plongeur::where(function ($query) use ($currentYear) {
        //         // Plongeurs sans aucune licence
        //         $query->whereNotIn('id', function ($subQuery) {
        //             $subQuery->select('plongeur_id')->from('licences');
        //         })
        //         ->orWhereIn('id', function ($subQuery) use ($currentYear) {
        //             $subQuery->select('plongeur_id')
        //                     ->from('licences')
        //               ->where('statut', ClubStatutConstants::STATUT_ACCEPTER)
        //               ->whereYear('annee', '!=', $currentYear);
        //         });
        //     })
        //     ->where('type_plongeur_id', 2)
        //     ->count();


        //     // dd($nombrePlongeursInactifs);
           
        
        //     return view(
        //         "dashboard.pages.home",
        //         compact(
        //             'nombrePlongeursActifs',
        //             'nombrePlongeursInactifs',
         
        //         )
        //     );
        // })->name('club.index');

        // demande adhesion
        Route::post("/demande-adhesion/{id}", [AdhesionClubController::class, "demande_adhesion"])->name('demande.adhesion');

        // plongeur
        Route::get("/plongeurs", [PlongeurClubController::class, "index"])->name('club.plongeurs.index');
        Route::get("/plongeurs-inactifs", [PlongeurClubController::class, "plongeurs_inactifs"])->name('club.plongeurs.inactifs');
        Route::get("/plongeurs/ajouter", [PlongeurClubController::class, 'create'])->name('club.plongeurs.create');
        Route::post("/plongeurs", [PlongeurClubController::class, "store"])->name('club.plongeurs.store');
        Route::post("/plongeurs/modifier/{id}", [PlongeurClubController::class, "update"])->name('club.plongeurs.update');
        Route::delete("/plongeurs/{id}", [PlongeurClubController::class, "destroy"])->name('club.plongeurs.destroy');
        Route::get("/plongeurs/modifier/{id}", [PlongeurClubController::class, 'edit'])->name('club.plongeurs.show');

        // athletes
        Route::get("/athletes", [AthleteClubController::class, "index"])->name('club.athletes.index');
        Route::get("/athletes-inactifs", [AthleteClubController::class, "athletes_inactifs"])->name('club.athletes.inactifs');
        Route::get("/athletes/ajouter", [AthleteClubController::class, 'create'])->name('club.athletes.create');
        Route::post("/athletes", [AthleteClubController::class, "store"])->name('club.athletes.store');
        Route::post("/athletes/modifier/{id}", [AthleteClubController::class, "update"])->name('club.athletes.update');
        Route::delete("/athletes/{id}", [AthleteClubController::class, "destroy"])->name('club.athletes.destroy');
        Route::get("/athletes/modifier/{id}", [AthleteClubController::class, 'edit'])->name('club.athletes.show');

        // moniteurs
        Route::get("/moniteurs", [MoniteurClubController::class, "index"])->name('club.moniteurs.index');
        Route::get("/moniteurs-inactifs", [MoniteurClubController::class, "moniteurs_inactifs"])->name('club.moniteurs.inactifs');
        Route::get("/moniteurs/ajouter", [MoniteurClubController::class, 'create'])->name('club.moniteurs.create');
        Route::post("/moniteurs", [MoniteurClubController::class, "store"])->name('club.moniteurs.store');
        Route::post("/moniteurs/modifier/{id}", [MoniteurClubController::class, "update"])->name('club.moniteurs.update');
        Route::delete("/moniteurs/{id}", [MoniteurClubController::class, "destroy"])->name('club.moniteurs.destroy');
        Route::get("/moniteurs/modifier/{id}", [MoniteurClubController::class, 'edit'])->name('club.moniteurs.show');

        // Route::get("/plongeurs", [PlongeurController::class, 'index'])->name('plongeurs.index');
        // Route::get("/plongeurs/api", [PlongeurController::class, 'getAllPlongeurs']);
        Route::get("/plongeurs/niveau/{id_niveau}", [PlongeurController::class, 'getPlongeursParNiveau']);
        Route::get("/plongeurs/{id}/details", [PlongeurController::class, 'show'])->name('plongeurs.show');
        Route::get("/plongeurs/{id_plongeur}/niveau/1/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau1'])->name('plongeurs.suiviPrepaN1');
        Route::get("/plongeurs/{id_plongeur}/niveau/2/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau2'])->name('plongeurs.suiviPrepaN2');
        Route::get("/plongeurs/{id_plongeur}/niveau/3/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau3'])->name('plongeurs.suiviPrepaN3');
        Route::get("/plongeurs/{id_plongeur}/niveau/4/suivi-prepa", [PlongeurController::class, 'suiviPrepaNiveau4'])->name('plongeurs.suiviPrepaN4');
        Route::get("/plongeurs/{id_plongeur}/formations/niveau/{id_niveau}", [PlongeurController::class, "formationsPlongeur"])->name('plongeurs.formations');
        Route::post("/plongeurs/{id_plongeur}/formations/validate", [ExercicePlongeurStatutController::class, "validerFormation"])->name('plongeurs.validerFormation');
        Route::post("/plongeurs/{id_plongeur}/formations/reject", [ExercicePlongeurStatutController::class, "refuserFormation"])->name('plongeurs.refuserFormation');
        Route::get("/plongeurs/{id}/carnet-de-plongee", [CarnetPlongeeDetailsEnteteController::class, 'carnetPlongeeParPlongeur'])->name('plongeur.carnet_plongee.index');


        // Mon compte
        Route::get("/mon-compte", [UserController::class, "myAccount"])->name('compteClub.index');
        Route::put("/mon-compte", [UserController::class, "updateAccount"])->name('compteClub.update');

        // pdfs
        Route::get("/attestation-affiliation/{id}", [HomeController::class, "attestationAffiliation"])->name('attestation.affiliation');
        Route::get("/autorisation-plonge/{id}", [HomeController::class, "autorisationPlonge"])->name('autorisation.plonge');

        // - Licence
        Route::get("/demandes_en_attentes", [ClubLicenceController::class, 'demandes_en_attentes'])->name('club.demandes_licence.en_attentes');
        Route::get("/demandes_en_cous_validation", [ClubLicenceController::class, 'demandes_en_cours_validation'])->name('club.demandes_licence.en_cours_validation');
        Route::get("/demandes_acceptees", [ClubLicenceController::class, 'demandes_acceptees'])->name('club.demandes_licence.acceptees');
        Route::get("/demandes_refusees", [ClubLicenceController::class, 'demandes_refusees'])->name('club.demandes_licence.refusees');
        Route::post("/demandes-licence/{id}/{statut}", [ClubLicenceController::class, 'licence_statut'])->name('club.demandes_licence.statut');
        Route::post("/update-licences", [ClubLicenceController::class, 'updateLicences'])->name('club.demandes_licence.statut');


        Route::delete("/demandes-licence/{id}", [ClubLicenceController::class, "destroy"])->name('club.demandes_licence.destroy');
        Route::get('/document/{id}',[ClubLicenceController::class,'readDocument'])->name('club.licence.read.document');









        // Route::get("/plongeur", function () {
        //     return view("plongeurDash.pages.home");
        // })->name(
        //     'plongeur.dashboard'
        // );
        // Route::get("/plongeur/mon-compte", [PlongeurController::class, "infoPersonnel"])->name(
        //     'plongeur.mon-compte'
        // );
        // // - carnet de plongee
        // Route::get("/plongeur/carnet-plongee/{id}/equipes/ajouter", [EquipeController::class, 'indexParPlongeur'])->name('plongeur.equipes.index');


        // // - Formation
        // Route::get("/plongeur/formations", [FormationController::class, 'forationsmParPlongeur'])->name('plongeur.formations.index');

        // // - blogs
        // Route::get("/plongeur/blogs", [BlogController::class, 'plongeurBlogs'])->name('plongeur.blogs.index');
        // Route::get("/plongeur/blogs/{id}/details", [BlogController::class, 'blogDetails'])->name('plongeur.blogs.details');

        // // - cours
        // Route::get("/plongeur/cours", [CoursController::class, 'coursParPlongeur'])->name('plongeur.cours.index');
        // Route::get("/plongeur/cours/modifier/{id}", [CoursController::class, 'show'])->name('plongeur.cours.show');
    }
);

Route::middleware('auth:plongeurs')->group(
    function () {
        // Route::get("/plongeur/home", function () {
        //     return view("plongeurDash.pages.home");
        // })->name('plongeur.index');
        Route::get("/plongeur", [HomePlongeurController::class, 'index'])->name('plongeur.dashboard');
        Route::get("/plongeur/home", [HomePlongeurController::class, 'index'])->name('plongeur.index');

        // demande adhesion
        Route::post("/plongeur/demande-licence/{id}", [LicencePlongeurController::class, "demande_licence"])->name('demande.licence');

        // Route::get("/plongeur", function () {
        //     return view("plongeurDash.pages.home");
        // })->name(
        //     'plongeur.dashboard'
        // );
        Route::get("/plongeur/mon-compte", [PlongeurController::class, "infoPersonnel"])->name(
            'plongeur.mon-compte'
        );
        // - carnet de plongee
        Route::get("/plongeur/carnet-plongee/{id}/equipes/ajouter", [EquipeController::class, 'indexParPlongeur'])->name('plongeur.equipes.index');

        // - Formation
        Route::get("/plongeur/formations", [FormationController::class, 'forationsmParPlongeur'])->name('plongeur.formations.index');

        // - blogs
        Route::get("/plongeur/blogs", [BlogController::class, 'plongeurBlogs'])->name('plongeur.blogs.index');
        Route::get("/plongeur/blogs/{id}/details", [BlogController::class, 'blogDetails'])->name('plongeur.blogs.details');

        // - cours
        Route::get("/plongeur/cours", [CoursController::class, 'coursParPlongeur'])->name('plongeur.cours.index');
        Route::get("/plongeur/cours/modifier/{id}", [CoursController::class, 'show'])->name('plongeur.cours.show');

        //attestation de licence 
        Route::get("/attestation-licence/{id}", [HomePlongeurController::class, "attestationLicence"])->name('attestation.licence');

        // - logout
        Route::post('/plongeur/logout', function () {

            Auth::guard('plongeurs')->logout();
            return redirect()->route('plongeur.login');

        })->name('plongeur.logout.submit');
    }
);
Route::get("/plongeur/login", [PlongeurLoginController::class, "showLoginForm"])->name('plongeur.login');
Route::post("/plongeur/login", [PlongeurLoginController::class, "login"])->name('plongeur.login.submit');

