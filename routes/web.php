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
    return view('welcome');
})->name('home');


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
    return view('actualites');
})->name('actualites');




Route::get('/contact', function () {
    return view('contact');
})->name('contact');



