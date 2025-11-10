<?php

namespace App\Http\Controllers;

use App\Models\OffreEmploi;
use App\Models\OffreEmploiCv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RecrutementController extends Controller
{
    public function index()
    {
        try {
            // Start with empty collection
            $offres = collect([]);
            
            // Try to get offers with minimal operations
            try {
                $allOffres = OffreEmploi::orderBy('created_at', 'desc')->get();
                
                if ($allOffres && $allOffres->count() > 0) {
                    // Pre-process offers in controller to reduce view complexity
                    $offres = $allOffres->map(function($offre) {
                        // Pre-calculate image URL
                        $imageUrl = null;
                        if (!empty($offre->image)) {
                            try {
                                $imageUrl = Storage::disk('public')->url($offre->image);
                            } catch (\Exception $e) {
                                // If storage fails, imageUrl remains null
                            }
                        }
                        
                        // Pre-process description
                        $description = '';
                        if (!empty($offre->description)) {
                            $description = strip_tags($offre->description);
                            if (mb_strlen($description) > 100) {
                                $description = mb_substr($description, 0, 100) . '...';
                            }
                        }
                        
                        // Determine if inactive
                        $isActive = isset($offre->active) && ($offre->active === true || $offre->active === 1);
                        
                        return (object)[
                            'id' => $offre->id,
                            'titre' => $offre->titre ?? 'Offre d\'emploi',
                            'image_url' => $imageUrl,
                            'contrat' => $offre->contrat ?? '',
                            'ville' => $offre->ville ?? '',
                            'entreprise' => $offre->entreprise ?? '',
                            'description' => $description,
                            'active' => $isActive,
                        ];
                    });
                    
                    // Separate active and inactive
                    $activeOffres = $offres->filter(function($offre) {
                        return $offre->active === true;
                    });
                    
                    $inactiveOffres = $offres->filter(function($offre) {
                        return $offre->active === false;
                    });
                    
                    // Merge: active first, then inactive
                    $offres = $activeOffres->merge($inactiveOffres);
                }
            } catch (\Exception $dbError) {
                // Log database error but continue with empty collection
                Log::error('Recrutement DB error: ' . $dbError->getMessage());
            }
            
            return view('recrutement', compact('offres'));
        } catch (\Throwable $e) {
            // Catch all errors including fatal errors
            Log::error('Recrutement fatal error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            // Return empty collection if there's an error
            $offres = collect([]);
            try {
                return view('recrutement', compact('offres'));
            } catch (\Throwable $viewError) {
                // If view also fails, return simple response
                Log::error('Recrutement view error: ' . $viewError->getMessage());
                return response('Error loading page. Please check logs.', 500);
            }
        }
    }

    public function minimal()
    {
        try {
            $count = OffreEmploi::count();
            return response("Minimal test successful. Offers count: {$count}", 200);
        } catch (\Exception $e) {
            return response("Error: " . $e->getMessage(), 500);
        }
    }

    public function test()
    {
        try {
            // Get all offers ordered by creation date, then sort by active status
            $offres = OffreEmploi::orderBy('created_at', 'desc')->get();
            
            // Separate active and inactive offers
            $activeOffres = $offres->filter(function($offre) {
                return $offre->active === true || $offre->active === 1;
            });
            
            $inactiveOffres = $offres->filter(function($offre) {
                return $offre->active === false || $offre->active === 0 || $offre->active === null;
            });
            
            // Merge: active first, then inactive
            $offres = $activeOffres->merge($inactiveOffres);
            
            return view('recrutement-test', compact('offres'));
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Recrutement test page error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            // Return empty collection if there's an error
            $offres = collect([]);
            return view('recrutement-test', compact('offres'));
        }
    }

    public function show($id)
    {
        $offre = OffreEmploi::where('active', true)->findOrFail($id);
        return view('offre-emploi-details', compact('offre'));
    }

    public function uploadCv(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'offre_emploi_id' => 'required|exists:offres_emploi,id',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB max
            ], [
                'offre_emploi_id.required' => 'L\'offre d\'emploi est requise.',
                'offre_emploi_id.exists' => 'L\'offre d\'emploi sélectionnée n\'existe pas.',
                'cv.required' => 'Le fichier CV est requis.',
                'cv.file' => 'Le CV doit être un fichier valide.',
                'cv.mimes' => 'Le CV doit être au format PDF, DOC ou DOCX.',
                'cv.max' => 'Le fichier CV ne doit pas dépasser 5 Mo.',
            ]);

            if ($validator->fails()) {
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => $validator->errors()->first(),
                        'errors' => $validator->errors()
                    ], 422);
                }
                return back()->withErrors($validator)->withInput();
            }

            // Store the CV file
            $cvPath = $request->file('cv')->store('cvs', 'public');

            if (!$cvPath) {
                throw new \Exception('Erreur lors de l\'enregistrement du fichier.');
            }

            // Create the CV record
            OffreEmploiCv::create([
                'offre_emploi_id' => $request->offre_emploi_id,
                'cv' => $cvPath,
            ]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Votre CV a été envoyé avec succès.'
                ], 200);
            }

            return back()->with('success', 'Votre CV a été envoyé avec succès.');
        } catch (\Exception $e) {
            Log::error('CV Upload Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Une erreur est survenue lors de l\'envoi de votre CV. Veuillez réessayer.'
                ], 500);
            }

            return back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre CV. Veuillez réessayer.');
        }
    }
}

