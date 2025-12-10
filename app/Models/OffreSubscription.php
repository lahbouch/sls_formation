<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OffreSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'offre_id',
        'name',
        'phone',
        'note',
        'confirmed',
    ];

    protected $casts = [
        'confirmed' => 'boolean',
    ];

    /**
     * Get the offre that owns the subscription.
     */
    public function offre(): BelongsTo
    {
        return $this->belongsTo(Offre::class);
    }
}
