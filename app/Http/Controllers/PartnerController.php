<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class PartnerController extends Controller
{
    public function index()
    {
        try {
            $allPartners = Partner::all();
            
            // Pre-process partners in controller
            $partners = $allPartners->map(function($partner) {
                $imageUrl = null;
                if (!empty($partner->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($partner->image);
                    } catch (\Exception $e) {
                        Log::error('PartnerController - Error getting image URL: ' . $e->getMessage());
                    }
                }
                
                return (object)[
                    'id' => $partner->id,
                    'nom' => $partner->nom,
                    'image' => $partner->image,
                    'image_url' => $imageUrl,
                    'siteweb' => $partner->siteweb,
                ];
            });
            
            // Filter to only partners with images
            $partnersWithImages = $partners->filter(function($partner) {
                return !empty($partner->image_url);
            });
            
            return view('a_propos', compact('partnersWithImages'));
        } catch (\Throwable $e) {
            Log::error('PartnerController@index - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            return view('a_propos', ['partnersWithImages' => collect([])]);
        }
    }
}
