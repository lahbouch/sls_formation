<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ServicesController extends Controller
{
    public function index()
    {
        try {
            $allServices = Service::all();
            
            // Pre-process all services in controller
            $services = $allServices->map(function($service) {
                $imageUrl = null;
                if (!empty($service->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($service->image);
                    } catch (\Exception $e) {
                        Log::error('ServicesController - Error getting image URL: ' . $e->getMessage());
                    }
                }
                
                return (object)[
                    'id' => $service->id,
                    'titre' => $service->titre,
                    'description' => $service->description,
                    'image' => $service->image,
                    'image_url' => $imageUrl,
                    'minimized_image' => $service->minimized_image,
                ];
            });
            
            $pageTitle = 'Nos Services';
            $pageDescription = 'Découvrez tous nos services. Nous offrons une gamme complète de solutions pour répondre à tous vos besoins.';
            $pageKeywords = 'services, solutions, prestations';
            
            return view('services', compact('services', 'pageTitle', 'pageDescription', 'pageKeywords'));
        } catch (\Throwable $e) {
            Log::error('ServicesController@index - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            return view('services', ['services' => collect([])]);
        }
    }
    
    public function show($id)
    {
        try {
            $service = Service::with(['types.offres'])->findOrFail($id);
            
            // Pre-process service data
            $imageUrl = null;
            if (!empty($service->image)) {
                try {
                    $imageUrl = Storage::disk('public')->url($service->image);
                } catch (\Exception $e) {
                    Log::error('ServicesController@show - Error getting image URL: ' . $e->getMessage());
                }
            }
            
            $minimizedImageUrl = null;
            if (!empty($service->minimized_image)) {
                try {
                    $minimizedImageUrl = Storage::disk('public')->url($service->minimized_image);
                } catch (\Exception $e) {
                    Log::error('ServicesController@show - Error getting minimized image URL: ' . $e->getMessage());
                }
            }
            
            // Pre-process types and their offres
            $types = $service->types->map(function($type) {
                $offres = $type->offres->map(function($offre) {
                    $offreImageUrl = null;
                    if (!empty($offre->image)) {
                        try {
                            $offreImageUrl = Storage::disk('public')->url($offre->image);
                        } catch (\Exception $e) {
                            // If storage fails, imageUrl remains null
                        }
                    }
                    
                    // Pre-generate route URL to avoid calling route() in view loops
                    $detailsUrl = route('offre.details', $offre->id);
                    
                    return (object)[
                        'id' => $offre->id,
                        'titre' => $offre->titre,
                        'title' => $offre->title,
                        'intitule' => $offre->intitule,
                        'num' => $offre->num,
                        'description' => $offre->description,
                        'image' => $offre->image,
                        'image_url' => $offreImageUrl,
                        'contrat' => $offre->contrat,
                        'created_at' => $offre->created_at,
                        'details_url' => $detailsUrl, // Pre-generated route URL
                    ];
                });
                
                return (object)[
                    'id' => $type->id,
                    'nom' => $type->nom,
                    'code' => $type->code,
                    'offres' => $offres,
                ];
            });
            
            // Pre-compute collection checks to avoid doing it in the view
            $hasTypes = $types->isNotEmpty();
            $hasOffres = $types->contains(function($type) {
                return $type->offres->isNotEmpty();
            });
            $hasNoOffres = !$hasTypes || !$hasOffres;
            
            $serviceData = (object)[
                'id' => $service->id,
                'titre' => $service->titre,
                'description' => $service->description,
                'image' => $service->image,
                'image_url' => $imageUrl,
                'minimized_image' => $service->minimized_image,
                'minimized_image_url' => $minimizedImageUrl,
                'types' => $types,
                'has_no_offres' => $hasNoOffres, // Pre-computed check
            ];
            
            $descriptionShort = mb_strlen($serviceData->description) > 160 ? mb_substr(strip_tags($serviceData->description), 0, 160) . '...' : strip_tags($serviceData->description);
            
            $pageTitle = $serviceData->titre . ' - Services';
            $pageDescription = $descriptionShort ?: 'Découvrez notre service ' . $serviceData->titre;
            $pageKeywords = 'service, ' . strtolower($serviceData->titre) . ', solutions';
            
            return view('service', compact('serviceData', 'pageTitle', 'pageDescription', 'pageKeywords'));
        } catch (\Exception $e) {
            Log::error('ServicesController@show - Error: ' . $e->getMessage());
            abort(404);
        }
    }
}
