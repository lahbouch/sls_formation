<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:50',
            'message' => 'required|string',
        ], [
            'full_name.required' => 'Le nom et prénom sont requis.',
            'email.required' => 'L\'email est requis.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'sujet.required' => 'Le sujet est requis.',
            'message.required' => 'Le message est requis.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'telephone' => $request->telephone,
            'message' => $request->message,
        ]);

        // If AJAX request, return JSON for validation errors only
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'redirect' => route('contact.thank-you')
            ], 200);
        }

        // For normal form submission, redirect to thank you page
        return redirect()->route('contact.thank-you');
    }
}
