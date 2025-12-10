<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'num',
        'title',
        'intitule',
        'image',
        'objectif',
        'prerequis',
        'programme',
    ];

    /**
     * Get the type that owns the offre.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * Get the subscriptions for this offre.
     */
    public function subscriptions(): HasMany
    {
        return $this->hasMany(OffreSubscription::class);
    }
}
