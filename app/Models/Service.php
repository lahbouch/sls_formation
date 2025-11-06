<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'titre',
        'image',
        'description',
    ];

    /**
     * Get the type that owns the service.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
