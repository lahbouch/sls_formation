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
            // Get all offers, then sort in memory to avoid database issues
            $offres = OffreEmploi::orderBy('created_at', 'desc')
                ->get()
                ->sortByDesc(function ($offre) {
                    // Sort by active status first (true = 1, false = 0)
                    return $offre->active ? 1 : 0;
                })
                ->values(); // Re-index the collection
            
            return view('recrutement', compact('offres'));
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Recrutement page error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            
            // Return empty collection if there's an error
            $offres = collect([]);
            return view('recrutement', compact('offres'));
        }
    }

    public function test()
    {
        try {
            // Get all offers, then sort in memory to avoid database issues
            $offres = OffreEmploi::orderBy('created_at', 'desc')
                ->get()
                ->sortByDesc(function ($offre) {
                    // Sort by active status first (true = 1, false = 0)
                    return $offre->active ? 1 : 0;
                })
                ->values(); // Re-index the collection
            
            return view('recrutement-test', compact('offres'));
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Recrutement test page error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
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

