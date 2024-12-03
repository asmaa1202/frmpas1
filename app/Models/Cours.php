<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'cree_par',
        'id_niveau',
        'lien',
        'order'
    ];




    public function niveau()
    {
        return $this->belongsTo(Level::class, 'id_niveau');
    }

    public function createur()
    {
        return $this->hasOne(User::class, 'id', "cree_par");
    }
}