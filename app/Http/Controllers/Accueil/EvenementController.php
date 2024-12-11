<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    const evenement_status_active = 1 ; 
    const evenement_status_principal = 2 ; 

    public function index(Request $request)
    {

        if($request->input('annee')){
            $evenements = Evenement::whereYear('created_at' ,$request->input('annee'))->latest()->paginate(4);
        }else{
             $evenements = Evenement::query()->latest()->paginate(4);
        }
// dd($evenements);
        $recentEvenements = Evenement::whereIn('status', [ $this::evenement_status_active, $this::evenement_status_principal])->limit(4)->latest()->get();
       
        return view('accueil.evenements.evenements', compact('evenements', 'recentEvenements'));
    }

    public function show($hash)
    {
        // dd($hash);
        $evenement = Evenement::query()
        // ->whereIn('status', [1, 2])
        ->where('evenement_hash', $hash) 
        ->firstOrFail();
 
        $recentEvenements = Evenement::whereIn('status', [ $this::evenement_status_active, $this::evenement_status_principal])->limit(4)->latest()->get();

        return view('accueil.evenements.show', compact('evenement', 'recentEvenements'));
    }

    public function show1()
    {
        return view('accueil.evenements.show1');
    }

}
