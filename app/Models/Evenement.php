<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed $title
 * @property mixed $subject_preview
 * @property mixed $subject_body
 * @property mixed $path_cover
 * @property mixed $status
 * @property mixed $created_by
 * @property mixed $blog_hash
 */
class Evenement extends Model
{
    use HasFactory, SoftDeletes;

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    public function comments(): HasMany
    {
        return $this->hasMany(EvenementComment::class)->orderBy('created_at', 'desc');
    }
    
    public function countComments(): int
    {
        return $this->hasMany(EvenementComment::class)->count();
    }

    public function statusBadge()
    {
        switch ($this->status) {
            case 0:
                return '<span class="badge badge-secondary">Non-Active</span>';
            case 1:
                return '<span class="badge badge-success">Active</span>';
            case 2:
                return '<span class="badge badge-primary">Principale</span>';
        }
    }

}
