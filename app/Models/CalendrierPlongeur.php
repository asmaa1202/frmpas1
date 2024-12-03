<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendrierPlongeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_plongeur',
        'id_calendrier',
        'accepter',
        'la_cause'
    ];

    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'id_plongeur');
    }

    public function calendrier()
    {
        return $this->belongsTo(Calendrier::class, 'id_calendrier');
    }
}