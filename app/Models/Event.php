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
        'start_date' => 'date',
        'end_date' => 'date',
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
        
        // Compare dates (end of day for end_date to include the full day)
        return $this->end_date->endOfDay()->isFuture();
    }
}
