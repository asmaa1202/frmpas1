<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnetPlongeeDetailsEntete extends Model
{
    use HasFactory;

    protected $fillable = [
        'lieu',
        'id_directeur',
        'id_instructeur',
        'site',
        'support',
        'profondeur',
        'dt',
        'temps',
        'courant',
        'vent',
        'visibilite',
        'mer',
        't_eau',
        'plongee',
        'cree_par',
    ];


    public function directeur()
    {
        return $this->belongsTo(User::class, 'id_directeur');
    }

    public function instructeur()
    {
        return $this->belongsTo(User::class, 'id_instructeur');
    }

    public function createur()
    {
        return $this->belongsTo(User::class, 'cree_par');
    }
    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }

    public function carnetPlongeeDetails()
    {
        return $this->hasMany(CarnetPlongeeDetails::class, 'id_carnet_plongee_details_entete');
    }
}