<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SphereController;

Route::get('/', [PublicController::class, 'welcome'])-> name('welcome');

Route::get('homepage', [PublicController::class, 'homepage'])-> name('homepage')->middleware('auth');

Route::get('profilo/editProfilo', [PublicController::class, 'editProfilo'])-> name('editProfilo')->middleware('auth');

Route::put('updateProfilo', [PublicController::class, 'updateProfilo'])-> name('updateProfilo')->middleware('auth');

Route::get('editSphere/{sphere}', [SphereController::class, 'edit'])-> name('edit.sphere')->middleware('auth');

Route::get('profilo', [SphereController::class, 'index'])-> name('index.profilo')->middleware('auth');

Route::get('tags/{tag}', [SphereController::class, 'indexTag'])-> name('index.tag')->middleware('auth');

Route::get('/profilo/{userId}', [SphereController::class, 'show'])-> name('profilo.show')->middleware('auth');

