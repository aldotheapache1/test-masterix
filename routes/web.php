<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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

Route::get('/',  [AgendaController::class, 'index']);
Route::get('/contats/create',  [AgendaController::class, 'create']);
Route::get('/contats/edit/{id}', [AgendaController::class, 'edit']);

Route::post('/', [AgendaController::class, 'store']);

Route::put('/contats/update/{id}', [AgendaController::class, 'update']);

Route::delete('/contats/{id}', [AgendaController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
