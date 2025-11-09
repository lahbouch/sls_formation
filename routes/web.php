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

Route::get('/', function () {
    $services = \App\Models\Service::all();
    $articles = \App\Models\Article::with('articleType')->latest('date_created')->limit(3)->get();
    return view('welcome', compact('services', 'articles'));
})->name('home');


Route::get('/services/{id}', function ($id) {
    $service = \App\Models\Service::with(['types.offres'])->findOrFail($id);
    return view('service', compact('service'));
})->name('service');


Route::get('/a-propos', function () {
    $partners = \App\Models\Partner::all();
    return view('a_propos', compact('partners'));
})->name('a-propos');


Route::get('/services', function () {
    $services = \App\Models\Service::all();
    return view('services', compact('services'));
})->name('services');



Route::get('/evenements', function () {
    return view('evenements');
})->name('evenements');




Route::get('/galleries', function () {
    $galleries = \App\Models\Gallery::whereNotNull('image')->paginate(12);
    return view('galleries', compact('galleries'));
})->name('galleries');


Route::get('/actualites', function () {
    $selectedCategory = request()->query('category');
    
    // Get all categories with article counts
    $categories = \App\Models\ArticleType::withCount('articles')->get();
    
    // Get articles based on selected category
    $articlesQuery = \App\Models\Article::with('articleType')->latest('date_created');
    
    if ($selectedCategory) {
        $articlesQuery->whereHas('articleType', function($query) use ($selectedCategory) {
            $query->where('id', $selectedCategory);
        });
    }
    
    $articles = $articlesQuery->paginate(9);
    
    return view('actualites', compact('articles', 'categories', 'selectedCategory'));
})->name('actualites');




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

Route::get('/articles/{id}', function ($id) {
    $article = \App\Models\Article::with('articleType')->findOrFail($id);
    return view('article-details', compact('article'));
})->name('article.details');



