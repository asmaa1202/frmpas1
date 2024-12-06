<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Plongeur extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'genre',
        'nom',
        'prenom',
        'image',
        'email',
        'cin',
        'adresse',
        'code_postal',
        'ville',
        'pays',
        'date_de_naissance',
        'profession',
        'telephone_fixe',
        'telephone_fixe_diffusable',
        'telephone_portable',
        'telephone_portable_diffusable',
        'nom_persone_cas_urgence',
        'prenom_persone_cas_urgence',
        'telephone_fixe_persone_cas_urgence',
        'telephone_portable_persone_cas_urgence',
        'email_persone_cas_urgence',
        'lien_parente_persone_cas_urgence',
        'n_licence',
        'date_visite_medicale',
        'id_niveau',
        'enseignement',
        'qualifications',
        'jour_entrainement',
        'cree_par',
        'club_id',
        'type_club_id'
    ];

    protected $guard = "plongeurs";

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function createur()
    {
        return $this->belongsTo(User::class, 'cree_par');
    }

    public function niveau()
    {
        return $this->belongsTo(Level::class, 'id_niveau');
    }

    public function equipes()
    {
        return $this->belongsToMany(Equipe::class, 'equipe_plongeurs', 'id_plongeur', 'id_equipe');
    }

    public function formations()
    {
        return $this->hasMany(Formation::class, "id_plongeur");
    }

    public function carnet_plongee_details()
    {
        return $this->hasMany(CarnetPlongeeDetails::class, "id_plongeur");
    }

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }

    public function licence()
    {
        return $this->belongsTo(Licence::class, 'plongeur_id');
    }

    public function hasActiveLicence()
    {
        return $this->licence()
            ->where('annee', date('Y'))
            ->exists();
    }
    public $timestamps = false;
}