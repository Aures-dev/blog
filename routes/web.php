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