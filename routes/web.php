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

Route::get('/teste', function() {
    $nome = 'Joaquim';

    $arr = [1,2,3,4,5];

    $nomes = ['Ana', 'Paulo', 'Mateus'];

    return view('teste', ['nome' => $nome, 'arr' => $arr, 'names' => $nomes]);
});

Route::get('/produtos', function() {
    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});

Route::get('/produto/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});
