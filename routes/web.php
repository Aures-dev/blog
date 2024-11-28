<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

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
Route::get('/article-form', [ArticlesController::class,'create']);
Route::post('/articles/create', [ArticlesController::class,'store']);

/** 
 * Routes liées à la mise à jour d'un article
*/
Route::get('/article/{article}/edit',[ArticlesController::class,'edit']);
Route::patch('/article/{article}/edit', [ArticlesController::class, 'update']);

/**
 * Route de suppression
 */
Route::delete('article/{article}/delete', [ArticlesController::class, 'delete']);