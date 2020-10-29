<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::post('cadastrarUsuario', [HomeController::class, 'userRegister']);
Route::post('cadastrarAnimal', [HomeController::class, 'animalRegister']);


Route::get('/', [HomeController::class, 'loadHome']);
Route::get('/adocao', [HomeController::class, 'loadAnimal']);

Route::get('/animal/{id}', [HomeController::class, 'consultarAnimal']);
