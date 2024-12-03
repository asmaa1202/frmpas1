<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnetPlongeeDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'id_plongeur',
        'id_equipe',
        'id_carnet_plongee_details_entete',
        'heure_depart',
        'heure_sortie',
        'support',
        'prof_m',
        'dt_mn',
        'p_depart',
        'p_sortie',
        'paliere_12',
        'paliere_9',
        'paliere_6',
        'paliere_3',
        'observation',
        'cree_par'
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }

    public function carnetPlongeeDetailsEntete()
    {
        return $this->belongsTo(CarnetPlongeeDetailsEntete::class, 'id_carnet_plongee_details_entete');
    }

    public function createur()
    {
        return $this->belongsTo(User::class, 'cree_par');
    }
}