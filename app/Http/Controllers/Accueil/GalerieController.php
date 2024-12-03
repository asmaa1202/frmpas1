<?php

namespace App\Http\Controllers\Accueil;

use App\Http\Controllers\Controller;
use App\Models\Galerie;
use Illuminate\Http\Request;

class GalerieController extends Controller
{
    public function galerie()
    {
        $galeries = Galerie::latest()->get();
        return view('accueil.galerie.galerie', compact('galeries'));
    }

    public function detail_galerie()
    {
        return view('accueil.galerie.detail_galerie');
    }

}
