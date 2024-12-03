<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adhesion extends Model
{
    use HasFactory ,SoftDeletes;

    public function club()
    {
        return $this->belongsTo(Club::class, 'club_id');
    }
}