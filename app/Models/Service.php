<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'image',
        'minimized_image',
        'description',
    ];

    /**
     * Get the types for the service.
     */
    public function types(): HasMany
    {
        return $this->hasMany(Type::class);
    }

    /**
     * Get the display title for the service (never null).
     */
    public function getDisplayTitleAttribute(): string
    {
        return $this->titre ?: "Service #{$this->id}";
    }
}
