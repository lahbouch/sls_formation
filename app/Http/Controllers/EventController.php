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
            
            return view('events', compact('events'));
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
            $event = Event::findOrFail($id);
            
            // Pre-process event data
            $imageUrl = null;
            if (!empty($event->image)) {
                try {
                    $imageUrl = Storage::disk('public')->url($event->image);
                } catch (\Exception $e) {
                    // If storage fails, imageUrl remains null
                }
            }
            
            $isActive = $event->isCurrentlyActive();
            
            $eventData = (object)[
                'id' => $event->id,
                'title' => $event->title,
                'image_url' => $imageUrl,
                'start_date' => $event->start_date,
                'end_date' => $event->end_date,
                'location' => $event->location ?? '',
                'description' => $event->description ?? '',
                'active' => $isActive,
            ];
            
            return view('event-details', compact('eventData'));
        } catch (\Exception $e) {
            Log::error('Event details error: ' . $e->getMessage());
            abort(404);
        }
    }
}
