<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ConcessionController;
use App\Http\Controllers\MineController;

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
Route::get('/', [WelcomeController::class, "welcome"]);
Route::get('/mine/show/{id}',[MineController::class, "index"]);
Route::get('/mines',[MineController::class, "showAll"]);
Route::get('/concession/show/{id}',[ConcessionController::class, "index"]);
Route::get('/concession/create',[ConcessionController::class, "showForm"]);
Route::get('/concessions',[ConcessionController::class, "showAll"]);
Route::post('/concession/success',[ConcessionController::class, "create"]);