<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Licence extends Model
{
    use HasFactory, SoftDeletes;
    public function plongeur()
    {
        return $this->belongsTo(Plongeur::class, 'plongeur_id');
    }
}
