<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

//Register User & Animal
Route::post('cadastrarUsuario', [HomeController::class, 'userRegister']);
Route::post('cadastrarAnimal', [HomeController::class, 'animalRegister']);


//Get animal locations
Route::get('/', [HomeController::class, 'loadHome']);
Route::get('/cadastro-usuario', [HomeController::class, 'loadUserRegister']);
Route::get('/cadastro-animal', [HomeController::class, 'loadAnimalRegister']);
Route::get('/adocao', [HomeController::class, 'adoptAnimal']);
Route::get('/acessar', [HomeController::class, 'loadLogin']);


//Results Routes
Route::get('/animal/{id}', [HomeController::class, 'consultarAnimal']);
Route::post('/login', [LoginController::class, 'autenticarLogin']);

