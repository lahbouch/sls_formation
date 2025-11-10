<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Test route to check if controller is accessible
Route::get('/home-test', function() {
    try {
        return response()->json([
            'status' => 'ok',
            'message' => 'Route is accessible',
            'php_version' => PHP_VERSION,
            'memory_limit' => ini_get('memory_limit'),
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});


Route::get('/services/{id}', [\App\Http\Controllers\ServicesController::class, 'show'])->name('service');


Route::get('/a-propos', [\App\Http\Controllers\PartnerController::class, 'index'])->name('a-propos');


Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index'])->name('services');



Route::get('/evenements', function () {
    return view('evenements');
})->name('evenements');




Route::get('/galleries', [\App\Http\Controllers\GalleryController::class, 'index'])->name('galleries');


Route::get('/actualites', [\App\Http\Controllers\ActualitesController::class, 'index'])->name('actualites');




Route::get('/jobs_ma', [\App\Http\Controllers\RecrutementController::class, 'index'])->name('recrutement');
Route::get('/jobs_ma/{id}', [\App\Http\Controllers\RecrutementController::class, 'show'])->name('offre-emploi.show');
Route::post('/jobs_ma/cv', [\App\Http\Controllers\RecrutementController::class, 'uploadCv'])->name('recrutement.cv.upload');

// Test route for recrutement page
Route::get('/recrutement-test', [\App\Http\Controllers\RecrutementController::class, 'test'])->name('recrutement.test');

// Diagnostic route to test if controller is accessible
Route::get('/jobs_ma_debug', function() {
    try {
        $count = \App\Models\OffreEmploi::count();
        return "Controller accessible. Database connection OK. Offers count: {$count}";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

// Minimal test route - just return text
Route::get('/jobs_ma_simple', function() {
    return "Route works! Controller is accessible.";
});

// Test route with controller but no view
Route::get('/jobs_ma_minimal', [\App\Http\Controllers\RecrutementController::class, 'minimal']);

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/contact/merci', function () {
    return view('contact-thank-you');
})->name('contact.thank-you');

Route::get('/offres/{id}', function ($id) {
    $offre = \App\Models\Offre::with('type.service')->findOrFail($id);
    return view('offre-details', compact('offre'));
})->name('offre.details');

Route::get('/articles/{id}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('article.details');

// Events routes
Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::get('/events/{id}', [\App\Http\Controllers\EventController::class, 'show'])->name('event.show');



