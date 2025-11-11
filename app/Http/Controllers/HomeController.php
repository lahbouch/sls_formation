<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Article;
use App\Models\OffreEmploi;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Increase PHP limits for this request
        @ini_set('memory_limit', '512M');
        @ini_set('max_execution_time', '60');
        
        try {
            // Use cache to speed up repeated requests (5 minutes cache)
            $cacheKey = 'home_data_' . md5('home');
            $cachedData = Cache::get($cacheKey);
            
            if ($cachedData !== null) {
                try {
                    // Ensure cached data has all required keys
                    if (!isset($cachedData['services'])) {
                        $cachedData['services'] = collect([]);
                    }
                    if (!isset($cachedData['articles'])) {
                        $cachedData['articles'] = collect([]);
                    }
                    if (!isset($cachedData['offres'])) {
                        $cachedData['offres'] = collect([]);
                    }
                    if (!isset($cachedData['events'])) {
                        $cachedData['events'] = collect([]);
                    }
                    
                    // Try to render view with error suppression for memory issues
                    try {
                        return view('welcome', $cachedData);
                    } catch (\Error $memoryError) {
                        // If it's a memory or fatal error, log and try minimal response
                        if (strpos($memoryError->getMessage(), 'memory') !== false || 
                            strpos($memoryError->getMessage(), 'Allowed memory') !== false) {
                            Log::error('HomeController@index - Memory error rendering cached view: ' . $memoryError->getMessage());
                            // Return minimal HTML response
                            return $this->getMinimalResponse($cachedData);
                        }
                        throw $memoryError;
                    }
                } catch (\Exception $e) {
                    Log::error('HomeController@index - Error rendering cached view: ' . $e->getMessage(), [
                        'trace' => $e->getTraceAsString()
                    ]);
                    // Clear bad cache and fall through to regenerate
                    try {
                        Cache::forget($cacheKey);
                    } catch (\Exception $cacheError) {
                        // Ignore cache clear errors
                    }
                }
            }
            
            // Initialize with empty collections
            $services = collect([]);
            $articles = collect([]);
            $offres = collect([]);
            $events = collect([]);
            
            // Process each section independently with early returns
            try {
                $services = $this->processServices();
                if (!($services instanceof \Illuminate\Support\Collection)) {
                    $services = collect([]);
                }
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing services: ' . $e->getMessage());
                $services = collect([]);
            } catch (\Throwable $e) {
                Log::error('HomeController@index - Fatal error processing services: ' . $e->getMessage());
                $services = collect([]);
            }
            
            try {
                $articles = $this->processArticles();
                if (!($articles instanceof \Illuminate\Support\Collection)) {
                    $articles = collect([]);
                }
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing articles: ' . $e->getMessage());
                $articles = collect([]);
            } catch (\Throwable $e) {
                Log::error('HomeController@index - Fatal error processing articles: ' . $e->getMessage());
                $articles = collect([]);
            }
            
            try {
                $offres = $this->processOffres();
                if (!($offres instanceof \Illuminate\Support\Collection)) {
                    $offres = collect([]);
                }
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing offres: ' . $e->getMessage());
                $offres = collect([]);
            } catch (\Throwable $e) {
                Log::error('HomeController@index - Fatal error processing offres: ' . $e->getMessage());
                $offres = collect([]);
            }
            
            try {
                $events = $this->processEvents();
                if (!($events instanceof \Illuminate\Support\Collection)) {
                    $events = collect([]);
                }
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error processing events: ' . $e->getMessage());
                $events = collect([]);
            } catch (\Throwable $e) {
                Log::error('HomeController@index - Fatal error processing events: ' . $e->getMessage());
                $events = collect([]);
            }
            
            // Prepare data for view - ensure all required variables are present
            $viewData = [
                'services' => $services ?? collect([]),
                'articles' => $articles ?? collect([]),
                'offres' => $offres ?? collect([]),
                'events' => $events ?? collect([]),
                'pageTitle' => 'Accueil - Services, Actualités et Offres d\'emploi',
                'pageDescription' => 'Découvrez nos services, actualités, événements et offres d\'emploi. Votre partenaire de confiance pour tous vos besoins.',
                'pageKeywords' => 'services, actualités, événements, offres d\'emploi, recrutement',
            ];
            
            // Ensure all are collections
            if (!($viewData['services'] instanceof \Illuminate\Support\Collection)) {
                $viewData['services'] = collect([]);
            }
            if (!($viewData['articles'] instanceof \Illuminate\Support\Collection)) {
                $viewData['articles'] = collect([]);
            }
            if (!($viewData['offres'] instanceof \Illuminate\Support\Collection)) {
                $viewData['offres'] = collect([]);
            }
            if (!($viewData['events'] instanceof \Illuminate\Support\Collection)) {
                $viewData['events'] = collect([]);
            }
            
            // Cache the processed data for 5 minutes
            try {
                Cache::put($cacheKey, $viewData, now()->addMinutes(5));
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error caching data: ' . $e->getMessage());
            }
            
            try {
                // Try to render view with error handling for memory issues
                try {
                    return view('welcome', $viewData);
                } catch (\Error $memoryError) {
                    // If it's a memory or fatal error, log and return minimal response
                    if (strpos($memoryError->getMessage(), 'memory') !== false || 
                        strpos($memoryError->getMessage(), 'Allowed memory') !== false ||
                        strpos($memoryError->getMessage(), 'Maximum execution time') !== false) {
                        Log::error('HomeController@index - Memory/timeout error: ' . $memoryError->getMessage());
                        return $this->getMinimalResponse($viewData);
                    }
                    throw $memoryError;
                }
            } catch (\Exception $e) {
                Log::error('HomeController@index - Error rendering view: ' . $e->getMessage(), [
                    'trace' => $e->getTraceAsString(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]);
                // Return minimal response instead of trying view again
                return $this->getMinimalResponse([
                    'services' => collect([]),
                    'articles' => collect([]),
                    'offres' => collect([]),
                    'events' => collect([]),
                    'pageTitle' => 'Accueil - Services, Actualités et Offres d\'emploi',
                    'pageDescription' => 'Découvrez nos services, actualités, événements et offres d\'emploi. Votre partenaire de confiance pour tous vos besoins.',
                    'pageKeywords' => 'services, actualités, événements, offres d\'emploi, recrutement',
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('HomeController@index - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            // Return minimal response on fatal error
            return $this->getMinimalResponse([
                'services' => collect([]),
                'articles' => collect([]),
                'offres' => collect([]),
                'events' => collect([]),
                'pageTitle' => 'Accueil - Services, Actualités et Offres d\'emploi',
                'pageDescription' => 'Découvrez nos services, actualités, événements et offres d\'emploi. Votre partenaire de confiance pour tous vos besoins.',
                'pageKeywords' => 'services, actualités, événements, offres d\'emploi, recrutement',
            ]);
        }
    }
    
    private function processServices()
    {
        try {
            // Limit services to prevent memory issues - reduced to 20 for speed
            $allServices = Service::limit(20)->get();
            
            if ($allServices->isEmpty()) {
                return collect([]);
            }
            
            $processed = collect([]);
            $baseUrl = asset('storage') . '/';
            
            foreach ($allServices as $service) {
                try {
                    $imagePath = $service->minimized_image ?: $service->image;
                    $imageUrl = null;
                    
                    // Faster URL generation without Storage facade
                    if ($imagePath) {
                        $imageUrl = $baseUrl . ltrim($imagePath, '/');
                    }
                    
                    $processed->push((object)[
                        'id' => $service->id ?? null,
                        'titre' => $service->titre ?? '',
                        'description' => $service->description ?? '',
                        'image' => $imagePath,
                        'image_url' => $imageUrl,
                        'minimized_image' => $service->minimized_image ?? null,
                        'item_id' => 'comp-lamqvxfv1__item-' . ($service->id ?? ''),
                        'text_id' => 'comp-lamqvxg32__item-' . ($service->id ?? ''),
                    ]);
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single service: ' . $e->getMessage());
                    // Continue with next service
                }
            }
            
            return $processed;
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing services: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    private function processArticles()
    {
        try {
            $allArticles = Article::with('articleType')->latest('date_created')->limit(3)->get();
            
            if ($allArticles->isEmpty()) {
                return collect([]);
            }
            
            $processed = collect([]);
            $baseUrl = asset('storage') . '/';
            
            foreach ($allArticles as $article) {
                try {
                    $imageUrl = null;
                    if (!empty($article->image)) {
                        $imageUrl = $baseUrl . ltrim($article->image, '/');
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
                    
                    $processed->push((object)[
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
                    ]);
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single article: ' . $e->getMessage());
                    // Continue with next article
                }
            }
            
            return $processed;
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing articles: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    private function processOffres()
    {
        try {
            $allOffres = OffreEmploi::latest('created_at')->limit(3)->get();
            
            if ($allOffres->isEmpty()) {
                return collect([]);
            }
            
            $processed = collect([]);
            $baseUrl = asset('storage') . '/';
            
            foreach ($allOffres as $offre) {
                try {
                    $imageUrl = null;
                    if (!empty($offre->image)) {
                        $imageUrl = $baseUrl . ltrim($offre->image, '/');
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
                    
                    // Check if offre is active - get raw value to avoid cast issues
                    $activeValue = $offre->getRawOriginal('active') ?? $offre->active ?? true;
                    $isActive = (bool)$activeValue;
                    
                    $processed->push((object)[
                        'id' => $offre->id ?? null,
                        'titre' => $offre->titre ?? '',
                        'titre_formatted' => $titreFormatted,
                        'image' => $offre->image ?? null,
                        'image_url' => $imageUrl,
                        'created_at' => $offre->created_at ?? null,
                        'date_formatted' => $dateFormatted,
                        'contrat' => $offre->contrat ?? null,
                        'ville' => $offre->ville ?? null,
                        'active' => $isActive,
                        'is_inactive' => !$isActive,
                    ]);
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single offre: ' . $e->getMessage());
                    // Continue with next offre
                }
            }
            
            return $processed;
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing offres: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    private function processEvents()
    {
        try {
            $allEvents = Event::latest('start_date')->limit(3)->get();
            
            if ($allEvents->isEmpty()) {
                return collect([]);
            }
            
            $processed = collect([]);
            $baseUrl = asset('storage') . '/';
            
            foreach ($allEvents as $event) {
                try {
                    $imageUrl = null;
                    if (!empty($event->image)) {
                        $imageUrl = $baseUrl . ltrim($event->image, '/');
                    }
                    
                    $titleFormatted = '';
                    if (!empty($event->title)) {
                        try {
                            $titleFormatted = ucwords(strtolower($event->title));
                        } catch (\Exception $e) {
                            $titleFormatted = $event->title;
                        }
                    }
                    
                    $dateFormatted = '';
                    if ($event->start_date) {
                        try {
                            $dateFormatted = \Carbon\Carbon::parse($event->start_date)->format('d M Y');
                        } catch (\Exception $e) {
                            $dateFormatted = '';
                        }
                    }
                    
                    // Check if event is active - get raw value to avoid cast issues
                    $activeValue = $event->getRawOriginal('active') ?? $event->active ?? true;
                    $isActive = (bool)$activeValue;
                    
                    $processed->push((object)[
                        'id' => $event->id ?? null,
                        'title' => $event->title ?? '',
                        'title_formatted' => $titleFormatted,
                        'image' => $event->image ?? null,
                        'image_url' => $imageUrl,
                        'start_date' => $event->start_date ?? null,
                        'end_date' => $event->end_date ?? null,
                        'date_formatted' => $dateFormatted,
                        'location' => $event->location ?? '',
                        'active' => $isActive,
                        'is_inactive' => !$isActive,
                        'item_id' => 'comp-events-item-' . ($event->id ?? ''),
                        'text_id' => 'comp-events-text-' . ($event->id ?? ''),
                    ]);
                } catch (\Exception $e) {
                    Log::error('HomeController - Error processing single event: ' . $e->getMessage());
                    // Continue with next event
                }
            }
            
            return $processed;
        } catch (\Exception $e) {
            Log::error('HomeController - Error processing events: ' . $e->getMessage());
            return collect([]);
        }
    }
    
    /**
     * Simple test method that bypasses the large view
     */
    public function simple()
    {
        try {
            // Just return a simple response to test if controller is accessible
            return response('<!DOCTYPE html><html><head><title>Test</title></head><body><h1>Controller is working!</h1><p>If you see this, the controller is accessible. The issue is likely with the welcome.blade.php view compilation.</p></body></html>', 200);
        } catch (\Exception $e) {
            return response('Error: ' . $e->getMessage(), 500);
        }
    }
    
    /**
     * Get minimal HTML response when view compilation fails
     */
    private function getMinimalResponse($data)
    {
        $services = $data['services'] ?? collect([]);
        $articles = $data['articles'] ?? collect([]);
        $offres = $data['offres'] ?? collect([]);
        $events = $data['events'] ?? collect([]);
        $pageTitle = $data['pageTitle'] ?? 'Accueil';
        $pageDescription = $data['pageDescription'] ?? '';
        
        $html = '<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($pageTitle) . '</title>
    <meta name="description" content="' . htmlspecialchars($pageDescription) . '">
</head>
<body>
    <h1>Bienvenue</h1>
    <p>Le site est en cours de chargement. Veuillez patienter...</p>
    <script>
        setTimeout(function() {
            window.location.reload();
        }, 3000);
    </script>
</body>
</html>';
        
        return response($html, 200)->header('Content-Type', 'text/html; charset=utf-8');
    }
}
