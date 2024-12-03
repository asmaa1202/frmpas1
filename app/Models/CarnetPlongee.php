<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarnetPlongee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'id_plongeur'
    ];

    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }
    public function equipePlongeur()
    {
        return $this->hasMany(Equipe::class, 'id_carnet_plongee');
    }
}