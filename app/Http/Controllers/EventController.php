<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    public function index()
    {
        try {
            $events = collect([]);
            
            try {
                $allEvents = Event::orderBy('start_date', 'desc')->get();
                
                if ($allEvents && $allEvents->count() > 0) {
                    // Pre-process events in controller
                    $events = $allEvents->map(function($event) {
                        // Pre-calculate image URL
                        $imageUrl = null;
                        if (!empty($event->image)) {
                            try {
                                $imageUrl = Storage::disk('public')->url($event->image);
                            } catch (\Exception $e) {
                                // If storage fails, imageUrl remains null
                            }
                        }
                        
                        // Pre-process description
                        $description = '';
                        if (!empty($event->description)) {
                            $description = strip_tags($event->description);
                            if (mb_strlen($description) > 100) {
                                $description = mb_substr($description, 0, 100) . '...';
                            }
                        }
                        
                        // Determine if event is currently active (active field AND end_date not passed)
                        $isActive = $event->isCurrentlyActive();
                        
                        return (object)[
                            'id' => $event->id,
                            'title' => $event->title ?? 'Événement',
                            'image_url' => $imageUrl,
                            'start_date' => $event->start_date, // Carbon instance
                            'end_date' => $event->end_date, // Carbon instance
                            'location' => $event->location ?? '',
                            'description' => $description,
                            'active' => $isActive,
                        ];
                    });
                    
                    // Separate active and inactive
                    $activeEvents = $events->filter(function($event) {
                        return $event->active === true;
                    });
                    
                    $inactiveEvents = $events->filter(function($event) {
                        return $event->active === false;
                    });
                    
                    // Merge: active first, then inactive
                    $events = $activeEvents->merge($inactiveEvents);
                }
            } catch (\Exception $dbError) {
                Log::error('Events page DB error: ' . $dbError->getMessage());
            }
            
            $pageTitle = 'Événements';
            $pageDescription = 'Découvrez tous nos événements à venir et passés. Rejoignez-nous pour des moments inoubliables.';
            $pageKeywords = 'événements, events, manifestations, activités';
            
            return view('events', compact('events', 'pageTitle', 'pageDescription', 'pageKeywords'));
        } catch (\Throwable $e) {
            Log::error('Events fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            $events = collect([]);
            try {
                return view('events', compact('events'));
            } catch (\Throwable $viewError) {
                Log::error('Events view error: ' . $viewError->getMessage());
                return response('Error loading page. Please check logs.', 500);
            }
        }
    }

    public function show($id)
    {
        try {
            $eventData = null;
            
            try {
                $event = Event::findOrFail($id);
                
                // Pre-process all event data in controller
                $imageUrl = null;
                if (!empty($event->image)) {
                    try {
                        $imageUrl = Storage::disk('public')->url($event->image);
                    } catch (\Exception $e) {
                        Log::error('EventController@show - Error getting image URL: ' . $e->getMessage());
                        // If storage fails, imageUrl remains null
                    }
                }
                
                $isActive = $event->isCurrentlyActive();
                
                // Format dates
                $startDateFormatted = $event->start_date ? $event->start_date->format('d M Y') : 'N/A';
                $endDateFormatted = $event->end_date ? $event->end_date->format('d M Y') : 'N/A';
                $startDateShort = $event->start_date ? $event->start_date->format('d/m/Y') : 'N/A';
                $endDateShort = $event->end_date ? $event->end_date->format('d/m/Y') : 'N/A';
                
                // Pre-process description (strip tags, etc.)
                $description = $event->description ?? '';
                $descriptionPlain = strip_tags($description);
                
                $eventData = (object)[
                    'id' => $event->id,
                    'title' => $event->title ?? 'Événement',
                    'image_url' => $imageUrl,
                    'start_date' => $event->start_date, // Carbon instance for flexibility
                    'end_date' => $event->end_date, // Carbon instance
                    'start_date_formatted' => $startDateFormatted,
                    'end_date_formatted' => $endDateFormatted,
                    'start_date_short' => $startDateShort,
                    'end_date_short' => $endDateShort,
                    'location' => $event->location ?? '',
                    'description' => $description,
                    'description_plain' => $descriptionPlain,
                    'active' => $isActive,
                ];
            } catch (\Exception $e) {
                Log::error('EventController@show - Error fetching event: ' . $e->getMessage(), [
                    'trace' => $e->getTraceAsString(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                ]);
                abort(404);
            }
            
            $descriptionShort = mb_strlen($eventData->description_plain) > 160 ? mb_substr($eventData->description_plain, 0, 160) . '...' : $eventData->description_plain;
            
            $pageTitle = $eventData->title . ' - Événement';
            $pageDescription = $descriptionShort ?: 'Découvrez l\'événement ' . $eventData->title;
            $pageKeywords = 'événement, ' . strtolower($eventData->title) . ', ' . ($eventData->location ? strtolower($eventData->location) : '');
            
            return view('event-details', compact('eventData', 'pageTitle', 'pageDescription', 'pageKeywords'));
        } catch (\Throwable $e) {
            Log::error('EventController@show - Fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            abort(404);
        }
    }
}
