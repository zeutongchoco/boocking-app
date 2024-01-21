<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShootingController;
use App\Http\Controllers\Weddingcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/shooting', [Shootingcontroller::class, 'liste_shooting']);
Route::get('/update-shooting/{id}', [Shootingcontroller::class, 'update_shooting']);
Route::get('/delete-shooting/{id}', [Shootingcontroller::class, 'delete_shooting']);
Route::post('/update/traitement', [Shootingcontroller::class, 'update_shooting_traitement']);
Route::get('/ajouter', [Shootingcontroller::class, 'ajouter_shooting']);
Route::post('/ajouter/trt', [Shootingcontroller::class, 'ajouter_shooting_traitement']);

Route::get('/wedding', [Weddingcontroller::class, 'liste_wedding']);
Route::get('/ajouter-wedding', [Weddingcontroller::class, 'ajouter_wedding']);
Route::post('/ajouter-wedding/traitement', [Weddingcontroller::class, 'ajouter_wedding_traitement']);
Route::get('/update-wedding/{id}', [Weddingcontroller::class, 'update_wedding']);
Route::post('/update-wedding/traitement', [Weddingcontroller::class, 'update_wedding_traitement']);
Route::get('/delete-wedding/{id}', [Weddingcontroller::class, 'delete_wedding']);

Route::resource('shooting', ShootingController::class);
Route::resource('wedding', WeddingController::class);
