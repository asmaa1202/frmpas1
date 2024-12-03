<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'id_encadrant',
        'date_debut',
        'date_fin',
        'type',
        'id_niveau',
        'observation'
    ];
    public $timestamps = false;
    public function encadrant()
    {
        return $this->hasOne(User::class, 'id', 'id_encadrant');
    }

    public function plongeurs()
    {
        return $this->belongsToMany(Plongeur::class, 'calendrier_plongeurs','id_calendrier', 'id_plongeur');
    }

    public function exercices()
    {
        return $this->belongsToMany(Exercice::class, 'calendrier_exercices','id_calendrier', 'id_exercice');
    }

    public function niveau()
    {
        return $this->hasOne(Level::class, 'id', 'id_niveau');
    }
}