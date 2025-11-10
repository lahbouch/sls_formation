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
            // Pre-process all data in controller with individual error handling
            $services = collect([]);
            $articles = collect([]);
            $offres = collect([]);
            $events = collect([]);
            
            try {
                $services = $this->processServices();
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing services: ' . $e->getMessage());
            }
            
            try {
                $articles = $this->processArticles();
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing articles: ' . $e->getMessage());
            }
            
            try {
                $offres = $this->processOffres();
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing offres: ' . $e->getMessage());
            }
            
            try {
                $events = $this->processEvents();
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing events: ' . $e->getMessage());
            }
            
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
                try {
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
                        'id' => $service->id ?? null,
                        'titre' => $service->titre ?? '',
                        'description' => $service->description ?? '',
                        'image' => $imagePath,
                        'image_url' => $imageUrl,
                        'minimized_image' => $service->minimized_image ?? null,
                    ];
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single service: ' . $e->getMessage());
                    return null;
                }
            })->filter(function($service) {
                return $service !== null;
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
                try {
                    $imageUrl = null;
                    if (!empty($article->image)) {
                        try {
                            $imageUrl = Storage::disk('public')->url($article->image);
                        } catch (\Exception $e) {
                            // If storage fails, imageUrl remains null
                        }
                    }
                    
                    $dateFormatted = '';
                    if ($article->date_created) {
                        try {
                            $dateFormatted = $article->date_created->format('d M Y');
                        } catch (\Exception $e) {
                            $dateFormatted = '';
                        }
                    }
                    
                    $titreFormatted = '';
                    if (!empty($article->titre)) {
                        try {
                            $titreFormatted = ucwords(strtolower($article->titre));
                        } catch (\Exception $e) {
                            $titreFormatted = $article->titre;
                        }
                    }
                    
                    $categoryName = '';
                    if ($article->articleType && !empty($article->articleType->nom)) {
                        try {
                            $categoryName = ucwords(strtolower($article->articleType->nom));
                        } catch (\Exception $e) {
                            $categoryName = $article->articleType->nom;
                        }
                    }
                    
                    return (object)[
                        'id' => $article->id ?? null,
                        'titre' => $article->titre ?? '',
                        'titre_formatted' => $titreFormatted,
                        'image' => $article->image ?? null,
                        'image_url' => $imageUrl,
                        'date_created' => $article->date_created ?? null,
                        'date_formatted' => $dateFormatted,
                        'articleType' => $article->articleType ? (object)[
                            'id' => $article->articleType->id ?? null,
                            'nom' => $article->articleType->nom ?? '',
                            'nom_formatted' => $categoryName,
                        ] : null,
                    ];
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single article: ' . $e->getMessage());
                    return null;
                }
            })->filter(function($article) {
                return $article !== null;
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
                try {
                    $imageUrl = null;
                    if (!empty($offre->image)) {
                        try {
                            $imageUrl = Storage::disk('public')->url($offre->image);
                        } catch (\Exception $e) {
                            // If storage fails, imageUrl remains null
                        }
                    }
                    
                    $titreFormatted = '';
                    if (!empty($offre->titre)) {
                        try {
                            $titreFormatted = ucwords(strtolower($offre->titre));
                        } catch (\Exception $e) {
                            $titreFormatted = $offre->titre;
                        }
                    }
                    
                    $dateFormatted = '';
                    if ($offre->created_at) {
                        try {
                            $dateFormatted = $offre->created_at->format('d M Y');
                        } catch (\Exception $e) {
                            $dateFormatted = '';
                        }
                    }
                    
                    return (object)[
                        'id' => $offre->id ?? null,
                        'titre' => $offre->titre ?? '',
                        'titre_formatted' => $titreFormatted,
                        'image' => $offre->image ?? null,
                        'image_url' => $imageUrl,
                        'created_at' => $offre->created_at ?? null,
                        'date_formatted' => $dateFormatted,
                    ];
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single offre: ' . $e->getMessage());
                    return null;
                }
            })->filter(function($offre) {
                return $offre !== null;
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
                try {
                    $imageUrl = null;
                    if (!empty($event->image)) {
                        try {
                            $imageUrl = Storage::disk('public')->url($event->image);
                        } catch (\Exception $e) {
                            // If storage fails, imageUrl remains null
                        }
                    }
                    
                    $titleFormatted = '';
                    if (!empty($event->title)) {
                        try {
                            $titleFormatted = ucwords(strtolower($event->title));
                        } catch (\Exception $e) {
                            $titleFormatted = $event->title;
                        }
                    }
                    
                    $isActive = false;
                    try {
                        $isActive = $event->isCurrentlyActive();
                    } catch (\Exception $e) {
                        // If isCurrentlyActive fails, default to false
                        Log::error('HomeController - Error checking event active status: ' . $e->getMessage());
                    }
                    
                    return (object)[
                        'id' => $event->id ?? null,
                        'title' => $event->title ?? '',
                        'title_formatted' => $titleFormatted,
                        'image' => $event->image ?? null,
                        'image_url' => $imageUrl,
                        'start_date' => $event->start_date ?? null,
                        'end_date' => $event->end_date ?? null,
                        'location' => $event->location ?? '',
                        'active' => $isActive,
                    ];
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single event: ' . $e->getMessage());
                    return null;
                }
            })->filter(function($event) {
                return $event !== null;
            });
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing events: ' . $e->getMessage());
            return collect([]);
        }
    }
}
