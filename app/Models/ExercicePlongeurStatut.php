<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExercicePlongeurStatut extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_exercice',
        'id_plongeur',
        'id_calendrier',
        'validee',
        'validee_par',
    ];

    public function exercice()
    {
        return $this->belongsTo(Exercice::class, 'id_exercice');
    }

    public function calendrier()
    {
        return $this->belongsTo(Calendrier::class, 'id_calendrier');
    }

    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }

    public function validateur()
    {
        return $this->belongsTo(Plongeur::class, 'validee_par');
    }
}
