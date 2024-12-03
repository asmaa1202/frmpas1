<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'id_carnet_plongee',
        'secours',
    ];

    public function carnet_plongee()
    {
        return $this->belongsTo(CarnetPlongee::class, 'id_carnet_plongee');
    }


    public function plongeurs()
    {
        return $this->belongsToMany(Plongeur::class, 'equipe_plongeurs', 'id_equipe', 'id_plongeur');
    }
}