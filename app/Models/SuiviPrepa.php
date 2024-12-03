<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuiviPrepa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        "label",
        "un",
        "deux",
        "trois",
        "quatre",
        "cinq",
        "six",
        "sept",
        "huit",
        "neuf",
        "dix",
        "id_plongeur",
        "id_encadrant",
        "saison",
        "id_niveau"
    ];

    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }

    public function encadrant()
    {
        return $this->belongsTo(User::class, 'id_encadrant');
    }

    public function niveau()
    {
        return $this->belongsTo(Level::class, 'id_niveau');
    }
}