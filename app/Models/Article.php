<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_type_id',
        'titre',
        'image',
        'date_created',
        'content',
    ];

    protected $casts = [
        'date_created' => 'date',
    ];

    /**
     * Get the article type that owns the article.
     */
    public function articleType(): BelongsTo
    {
        return $this->belongsTo(ArticleType::class);
    }
}
