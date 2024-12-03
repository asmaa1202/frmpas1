<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlongeeController extends Controller
{
    public function club()
    {
        return view('accueil.plongee.club');
    }

    public function formation()
    {
        return view('accueil.plongee.formation');
    }
}
