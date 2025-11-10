<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Article;
use App\Models\OffreEmploi;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        try {
            // Pre-process all data in controller
            $services = $this->processServices();
            $articles = $this->processArticles();
            $offres = $this->processOffres();
            $events = $this->processEvents();
            
            return view('welcome', compact('services', 'articles', 'offres', 'events'));
        } catch (\Throwable $e) {
            Log::error('HomeController@index - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            // Return empty collections on error
            return view('welcome', [
                'services' => collect([]),
                'articles' => collect([]),
                'offres' => collect([]),
                'events' => collect([]),
            ]);
        }
    }
    
    private function processServices()
    {
        try {
            $allServices = Service::all();
            
            return $allServices->map(function($service) {
                $imagePath = $service->minimized_image ?: $service->image;
                $imageUrl = null;
                
                if ($imagePath) {
                    try {
                        $imageUrl = Storage::disk('public')->url($imagePath);
                    } catch (\Exception $e) {
                        // If storage fails, imageUrl remains null
                    }
                }
                
                return (object)[
                    'id' => $service->id,
                    'titre' => $service->titre,
                    'description' => $service->description,
                    'image' => $imagePath,
                    'image_url' => $imageUrl,
                    'minimized_image' => $service->minimized_image,
                ];
            });
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing services: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    private function processArticles()
    {
        try {
            $allArticles = Article::with('articleType')->latest('date_created')->limit(3)->get();
            
            return $allArticles->map(function($article) {
                $imageUrl = null;
                if (!empty($article->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($article->image);
                    } catch (\Exception $e) {
                        // If storage fails, imageUrl remains null
                    }
                }
                
                $dateFormatted = $article->date_created ? $article->date_created->format('d M Y') : '';
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
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing articles: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    private function processOffres()
    {
        try {
            $allOffres = OffreEmploi::where('active', true)->latest('created_at')->limit(3)->get();
            
            return $allOffres->map(function($offre) {
                $imageUrl = null;
                if (!empty($offre->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($offre->image);
                    } catch (\Exception $e) {
                        // If storage fails, imageUrl remains null
                    }
                }
                
                $titreFormatted = $offre->titre ? ucwords(strtolower($offre->titre)) : '';
                $dateFormatted = $offre->created_at ? $offre->created_at->format('d M Y') : '';
                
                return (object)[
                    'id' => $offre->id,
                    'titre' => $offre->titre,
                    'titre_formatted' => $titreFormatted,
                    'image' => $offre->image,
                    'image_url' => $imageUrl,
                    'created_at' => $offre->created_at,
                    'date_formatted' => $dateFormatted,
                ];
            });
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing offres: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    private function processEvents()
    {
        try {
            $allEvents = Event::orderBy('start_date', 'desc')->limit(3)->get();
            
            return $allEvents->map(function($event) {
                $imageUrl = null;
                if (!empty($event->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($event->image);
                    } catch (\Exception $e) {
                        // If storage fails, imageUrl remains null
                    }
                }
                
                $titleFormatted = $event->title ? ucwords(strtolower($event->title)) : '';
                $isActive = $event->isCurrentlyActive();
                
                return (object)[
                    'id' => $event->id,
                    'title' => $event->title,
                    'title_formatted' => $titleFormatted,
                    'image' => $event->image,
                    'image_url' => $imageUrl,
                    'start_date' => $event->start_date,
                    'end_date' => $event->end_date,
                    'location' => $event->location,
                    'active' => $isActive,
                ];
            });
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing events: ' . $e->getMessage());
            return collect([]);
        }
    }
}
