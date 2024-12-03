<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'id_plongeur',
        'id_formateur',
        'id_niveau',
        'cree_par',
        'heure_depart',
        'heure_sortie',
        'prof_m',
        'observation'
    ];


    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }

    public function formateur()
    {
        return $this->belongsTo(User::class, 'id_formateur');
    }

    public function niveau()
    {
        return $this->belongsTo(Level::class, 'id_niveau');
    }

    public function createur()
    {
        return $this->belongsTo(User::class, 'cree_par');
    }
}