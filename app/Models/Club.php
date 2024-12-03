<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use HasFactory, SoftDeletes;
    // protected $fillable = [
    //     'nom',
    //     'ville',
    //     'date_creation',
    //     'email',
    //     'password',
    //     'image',
    //     'role_id',
    //     'role_id',
        
    // ];

    public function adhesions()
    {
        return $this->hasMany(Adhesion::class, 'club_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'club_id');
    }

    public function hasActiveAdhesion()
    {
        return $this->adhesions()
            ->where('annee', date('Y'))
            ->exists();
    }
}
