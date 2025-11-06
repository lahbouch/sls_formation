<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OffreEmploiCv extends Model
{
    use HasFactory;

    protected $table = 'offre_emploi_cv';

    protected $fillable = [
        'offre_emploi_id',
        'cv',
    ];

    /**
     * Get the job offer that owns this CV.
     */
    public function offreEmploi(): BelongsTo
    {
        return $this->belongsTo(OffreEmploi::class, 'offre_emploi_id');
    }
}
