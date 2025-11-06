<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'image',
    ];

    /**
     * Get the services for the type.
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get the offres for the type.
     */
    public function offres(): HasMany
    {
        return $this->hasMany(Offre::class);
    }
}
