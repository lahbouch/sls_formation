<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function index()
    {
        try {
            $galleriesPaginated = Gallery::whereNotNull('image')->paginate(12);
            
            // Pre-process galleries in controller
            $galleries = $galleriesPaginated->getCollection()->map(function($gallery) {
                $imageUrl = null;
                if (!empty($gallery->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($gallery->image);
                    } catch (\Exception $e) {
                        Log::error('GalleryController - Error getting image URL: ' . $e->getMessage());
                    }
                }
                
                return (object)[
                    'id' => $gallery->id,
                    'image' => $gallery->image,
                    'image_url' => $imageUrl,
                    'description' => $gallery->description ?? '',
                ];
            });
            
            // Replace the collection in paginator
            $galleriesPaginated->setCollection($galleries);
            
            return view('galleries', compact('galleriesPaginated'));
        } catch (\Throwable $e) {
            Log::error('GalleryController@index - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            return view('galleries', ['galleriesPaginated' => Gallery::paginate(12)]);
        }
    }
}
