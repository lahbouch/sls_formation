<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ActualitesController extends Controller
{
    public function index()
    {
        try {
            $selectedCategory = request()->query('category');
            
            // Get all categories with article counts
            $categories = ArticleType::withCount('articles')->get();
            
            // Get articles based on selected category
            $articlesQuery = Article::with('articleType')->latest('date_created');
            
            if ($selectedCategory) {
                $articlesQuery->whereHas('articleType', function($query) use ($selectedCategory) {
                    $query->where('id', $selectedCategory);
                });
            }
            
            $articlesPaginated = $articlesQuery->paginate(9);
            
            // Pre-process articles in controller
            $articles = $articlesPaginated->getCollection()->map(function($article) {
                $imageUrl = null;
                if (!empty($article->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($article->image);
                    } catch (\Exception $e) {
                        Log::error('ActualitesController - Error getting image URL: ' . $e->getMessage());
                    }
                }
                
                $dateFormatted = $article->date_created ? $article->date_created->format('d F Y') : '';
                $titreFormatted = $article->titre ? ucwords(strtolower($article->titre)) : '';
                $categoryName = $article->articleType ? ucwords(strtolower($article->articleType->nom)) : '';
                
                return (object)[
                    'id' => $article->id,
                    'titre' => $article->titre,
                    'titre_formatted' => $titreFormatted,
                    'image' => $article->image,
                    'image_url' => $imageUrl,
                    'date_created' => $article->date_created,
                    'date_formatted' => $dateFormatted,
                    'articleType' => $article->articleType ? (object)[
                        'id' => $article->articleType->id,
                        'nom' => $article->articleType->nom,
                        'nom_formatted' => $categoryName,
                    ] : null,
                ];
            });
            
            // Replace the collection in paginator
            $articlesPaginated->setCollection($articles);
            
            $pageTitle = 'Actualités' . ($selectedCategory ? ' - ' . ($categories->firstWhere('id', $selectedCategory)->nom ?? '') : '');
            $pageDescription = 'Découvrez nos dernières actualités et articles. Restez informé de nos nouveautés et événements.';
            $pageKeywords = 'actualités, articles, news, informations';
            
            return view('actualites', compact('articlesPaginated', 'categories', 'selectedCategory', 'pageTitle', 'pageDescription', 'pageKeywords'));
        } catch (\Throwable $e) {
            Log::error('ActualitesController@index - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            return view('actualites', [
                'articlesPaginated' => Article::paginate(9),
                'categories' => collect([]),
                'selectedCategory' => null,
            ]);
        }
    }
}
