<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportType extends Controller
{
    public function index(){
        return view('sport_type.sport_diving');
    }

    public function ffinswimming(){
        return view('sport_type.finswimming');
    }
    public function ffreediving(){
        return view('sport_type.freediving');
    }
    public function visual(){
        return view('sport_type.visual');
    }
}
