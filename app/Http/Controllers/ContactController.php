<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Info;
use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $info = Info::first();
        return view('contact', compact('info'));
    }

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

        $contact = Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'telephone' => $request->telephone,
            'message' => $request->message,
        ]);

        // Send email notification
        try {
            Mail::to('lahbouch.dev@gmail.com')->send(new ContactNotification($contact));
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send contact notification email: ' . $e->getMessage());
        }

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
