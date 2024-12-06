<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class PlongeeController extends Controller
{
    public function club()
    {
        $clubs = Club::all()->filter(function ($club) {
            $types = is_string($club->types) ? json_decode($club->types, true) : $club->types;
            return is_array($types) && in_array('Diving', $types);
        });

        $clubsByRegion = $clubs->groupBy('region');
     
        $regionOrder = ['Nord', 'Centre', 'Sud'];

        $clubsByRegion = $clubsByRegion->sortBy(function ($value, $key) use ($regionOrder) {
            return array_search($key, $regionOrder);
        });
    //   dd($clubs);
        return view('accueil.plongee.club', compact('clubsByRegion'));
    }

    public function formation()
    {
        return view('accueil.plongee.formation');
    }
}
