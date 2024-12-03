<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercice extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'obligatoire',
        'id_niveau'
    ];

    public function niveau()
    {
        return $this->belongsTo(Level::class, 'id_niveau');
    }

    public $timestamps = false;
}