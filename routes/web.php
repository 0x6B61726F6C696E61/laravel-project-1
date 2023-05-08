<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/przedmioty', [ItemController::class, 'store']);

Route::get('/przedmioty', [ItemController::class, 'index']);

Route::get('/przedmioty/dodaj-przedmiot', [ItemController::class, 'create']);

Route::get('/przedmioty/{id}', [ItemController::class, 'show']);
