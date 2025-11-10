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
            
            return view('services', compact('services'));
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
                    
                    return (object)[
                        'id' => $offre->id,
                        'titre' => $offre->titre,
                        'description' => $offre->description,
                        'image' => $offre->image,
                        'image_url' => $offreImageUrl,
                        'contrat' => $offre->contrat,
                        'created_at' => $offre->created_at,
                    ];
                });
                
                return (object)[
                    'id' => $type->id,
                    'nom' => $type->nom,
                    'offres' => $offres,
                ];
            });
            
            $serviceData = (object)[
                'id' => $service->id,
                'titre' => $service->titre,
                'description' => $service->description,
                'image' => $service->image,
                'image_url' => $imageUrl,
                'minimized_image' => $service->minimized_image,
                'minimized_image_url' => $minimizedImageUrl,
                'types' => $types,
            ];
            
            return view('service', compact('serviceData'));
        } catch (\Exception $e) {
            Log::error('ServicesController@show - Error: ' . $e->getMessage());
            abort(404);
        }
    }
}
