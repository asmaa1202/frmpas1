<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'label'
    ];

    public function courses()
    {
        return $this->hasMany(Cours::class, 'id_niveau');
    }
    public function plongeurs()
    {
        return $this->hasMany(Plongeur::class, 'id_niveau');
    }
    public function formations()
    {
        return $this->hasMany(Formation::class, 'id_niveau');
    }
}