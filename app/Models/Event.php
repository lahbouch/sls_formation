<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'start_date',
        'end_date',
        'location',
        'description',
        'active',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'active' => 'boolean',
    ];

    /**
     * Check if event is currently active (active field is true AND end_date hasn't passed)
     */
    public function isCurrentlyActive(): bool
    {
        if (!$this->active) {
            return false;
        }
        
        // If end_date is null, consider it as always active (no expiration)
        if (!$this->end_date) {
            return true;
        }
        
        return $this->end_date->isFuture();
    }
}
