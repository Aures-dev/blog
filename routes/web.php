<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;

Route::get('/', [PagesController::class, 'index']);
/**
 * Routes contact
 */
Route::get('/contact-us', [PagesController::class,'contact']);
/**
 * Routes about
 */
Route::get('/about-us',[PagesController::class,'about']);

/**
 * Routes liées aux articles
 */
Route::get('/articles',[ArticlesController::class,'index']);
Route::get('/article/{id}', [ArticlesController::class, 'show']);

/**
 * Routes liées aux formulaires
 */
Route::get('/article-form', [ArticlesController::class,'create'])->middleware('admin');
Route::post('/articles/create', [ArticlesController::class,'store'])->middleware('admin');

/** 
 * Routes liées à la mise à jour d'un article
*/
Route::get('/article/{article}/edit',[ArticlesController::class,'edit'])->middleware('auth');
Route::patch('/article/{article}/edit', [ArticlesController::class, 'update'])->middleware('auth');

/**
 * Route de suppression
 */
Route::delete('article/{article}/delete', [ArticlesController::class, 'delete'])->middleware('auth');

/**
 * Routes d'authentification
 */
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::get('/login', [SessionsController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [SessionsController::class, 'authenticate'])->name('login')->middleware('guest');
Route::post('/logout', [SessionsController::class, 'logout'])->name('logout')->middleware('auth');

/**
 * Routes liées à l'utilisateur
 */
Route::get('/profile', [UserController::class, 'index'])->name('profile')->middleware('auth');