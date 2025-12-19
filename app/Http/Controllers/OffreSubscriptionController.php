<?php

namespace App\Http\Controllers;

use App\Models\OffreSubscription;
use App\Mail\OffreSubscriptionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class OffreSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'offre_id' => 'required|exists:offres,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'note' => 'nullable|string|max:1000',
        ], [
            'offre_id.required' => 'L\'offre est requise.',
            'offre_id.exists' => 'L\'offre sélectionnée n\'existe pas.',
            'name.required' => 'Le nom est requis.',
            'phone.required' => 'Le numéro de téléphone est requis.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $subscription = OffreSubscription::create([
            'offre_id' => $request->offre_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'note' => $request->note,
            'confirmed' => false,
        ]);

        // Send email notification
        try {
            Mail::to('lahbouch.dev@gmail.com')->send(new OffreSubscriptionNotification($subscription));
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send subscription notification email: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Votre inscription a été enregistrée avec succès. Nous vous contacterons bientôt avec des informations supplémentaires.'
        ], 200);
    }
}
