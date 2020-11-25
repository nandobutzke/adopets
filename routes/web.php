<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnimalController;
use App\Http\Middleware\CheckLogin;
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



//Get animal locations
Route::get('/', [HomeController::class, 'loadHome']);
Route::get('/cadastro-usuario', [HomeController::class, 'loadUserRegister']);
Route::get('/acessar', [HomeController::class, 'loadLogin']);

Route::middleware([CheckLogin::class])->group(function() { 
  Route::get('/adocao', [AnimalController::class, 'adoptAnimal']);
  Route::get('/cadastro-animal', [AnimalController::class, 'loadAnimalRegister']);
  Route::get('/animal/{id}', [AnimalController::class, 'loadAnimal']);
  Route::post('/animalRegister', [AnimalController::class, 'animalRegister']);
}); 

Route::get('/logout', [LoginController::class, 'logout']);


//Results Routes
Route::get('/animal/{id}', [HomeController::class, 'consultarAnimal']);
Route::post('/login', [LoginController::class, 'autenticarLogin']);

