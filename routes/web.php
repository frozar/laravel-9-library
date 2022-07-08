<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

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

Route::get('/livres', [LivreController::class, 'getAll'])->name('livres');
Route::get('/livres/{id}', [LivreController::class, 'get']);
Route::post('/livres', [LivreController::class, 'add']);
Route::delete('/livres/{id}', [livreController::class, 'destroy']);//->name('livre.delete');
Route::post('/livres/{id}', [LivreController::class, 'update']);