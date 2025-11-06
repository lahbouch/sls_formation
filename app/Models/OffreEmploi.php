<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OffreEmploi extends Model
{
    use HasFactory;

    protected $table = 'offres_emploi';

    protected $fillable = [
        'titre',
        'image',
        'description',
        'active',
        'ville',
        'domaine',
        'fonction',
        'contrat',
        'salaire',
        'niveau_etude',
        'entreprise',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Get the CVs for this job offer.
     */
    public function cvs(): HasMany
    {
        return $this->hasMany(OffreEmploiCv::class, 'offre_emploi_id');
    }
}
