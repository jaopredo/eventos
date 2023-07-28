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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'search'])->middleware('auth');
Route::post('/events/create', [EventController::class, 'store'])->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::get('/teste', function() {
    $nome = 'Joaquim';

    $arr = [1,2,3,4,5];

    $nomes = ['Ana', 'Paulo', 'Mateus'];

    return view('teste', ['nome' => $nome, 'arr' => $arr, 'names' => $nomes]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
