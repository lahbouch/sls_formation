<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OffresController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $page = $request->get('page', 1);
        $perPage = 12;
        
        // Build query
        $offresQuery = Offre::with('type.service');
        
        // Apply search filter
        if ($query) {
            $offresQuery->where(function($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('intitule', 'like', "%{$query}%")
                  ->orWhere('objectif', 'like', "%{$query}%");
            });
        }
        
        // Get paginated results
        $offres = $offresQuery->orderBy('created_at', 'desc')->paginate($perPage)->appends($request->query());
        
        // Process offres data
        $offres->getCollection()->transform(function($offre) {
            $imageUrl = null;
            if (!empty($offre->image)) {
                try {
                    $imageUrl = Storage::disk('public')->url($offre->image);
                } catch (\Exception $e) {
                    // Image URL remains null
                }
            }
            
            // Get short description from objectif or intitule
            $description = $offre->objectif 
                ? strip_tags($offre->objectif) 
                : ($offre->intitule ?: '');
            $shortDescription = mb_strlen($description) > 120 
                ? mb_substr($description, 0, 120) . '...' 
                : $description;
            
            return (object)[
                'id' => $offre->id,
                'title' => $offre->intitule ?: 'Offre #' . $offre->num,
                'intitule' => $offre->intitule,
                'description' => $shortDescription,
                'image_url' => $imageUrl,
                'details_url' => route('offre.details', $offre->id),
                'type_name' => $offre->type ? $offre->type->nom : null,
            ];
        });
        
        return view('search-offers', compact('offres', 'query'));
    }
}

