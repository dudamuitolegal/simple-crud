<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});
Route::get('/jobs/{id}', function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::view('/contact', 'contact');
Route::view('/about', 'jobs');
// simple crud
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');



// simple anime crud
Route::get('/anime', [AnimeController::class, 'index'])->name('anime.index');
Route::get('/anime/create', [AnimeController::class, 'create'])->name('anime.create');
Route::post('/anime', [AnimeController::class, 'store'])->name('anime.store');
Route::get('/anime/{anime}/edit', [AnimeController::class, 'edit'])->name('anime.edit');
Route::put('/anime/{anime}/update', [AnimeController::class, 'update'])->name('anime.update');
Route::delete('/anime/{anime}/destroy', [AnimeController::class, 'destroy'])->name('anime.destroy');
Route::get('/anime/search', [AnimeController::class, 'search'])->name('anime.search');
