<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function show($id)
    {
        try {
            $article = Article::with('articleType')->findOrFail($id);
            
            // Pre-process all article data in controller
            $imageUrl = null;
            if (!empty($article->image)) {
                try {
                    $imageUrl = Storage::disk('public')->url($article->image);
                } catch (\Exception $e) {
                    Log::error('ArticleController@show - Error getting image URL: ' . $e->getMessage());
                }
            }
            
            $dateFormatted = $article->date_created ? $article->date_created->format('d F Y') : '';
            $titreFormatted = $article->titre ? ucwords(strtolower($article->titre)) : '';
            $categoryName = $article->articleType ? ucwords(strtolower($article->articleType->nom)) : '';
            
            $articleData = (object)[
                'id' => $article->id,
                'titre' => $article->titre,
                'titre_formatted' => $titreFormatted,
                'image' => $article->image,
                'image_url' => $imageUrl,
                'description' => $article->description ?? $article->content ?? '',
                'date_created' => $article->date_created,
                'date_formatted' => $dateFormatted,
                'articleType' => $article->articleType ? (object)[
                    'id' => $article->articleType->id,
                    'nom' => $article->articleType->nom,
                    'nom_formatted' => $categoryName,
                ] : null,
            ];
            
            return view('article-details', compact('articleData'));
        } catch (\Exception $e) {
            Log::error('ArticleController@show - Error: ' . $e->getMessage());
            abort(404);
        }
    }
}
