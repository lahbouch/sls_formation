<?php

namespace App\Http\Controllers;

use App\Models\OffreSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        OffreSubscription::create([
            'offre_id' => $request->offre_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'note' => $request->note,
            'confirmed' => false,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Votre inscription a été enregistrée avec succès. Nous vous contacterons bientôt avec des informations supplémentaires.'
        ], 200);
    }
}
