<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AnimalController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLogout;
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




Route::middleware([CheckLogin::class])->group(function() {
  Route::get('/animais', [AnimalController::class, 'adoptAnimal']);
  Route::get('/cadastro-animal', [AnimalController::class, 'loadAnimalRegister']);
  Route::get('/perfil', [HomeController::class, 'loadProfile']);
  Route::get('/animalPopup/{id}', [AnimalController::class, 'loadAnimal']);
  Route::get('/animalImage/{id}', [AnimalController::class, 'animalImage']);
  Route::get('/userImage/{id}', [HomeController::class, 'userImage']);
  Route::post('/animalRegister', [AnimalController::class, 'animalRegister']);
  Route::post('/logout', [LoginController::class, 'logout']);
  Route::post('/updateUser', [LoginController::class, 'updateUser']);
  Route::get('/resultados', [AnimalController::class, 'findAnimal']);
  Route::post('/updateAnimal', [AnimalController::class, 'updateAnimal']);
  Route::get('/editar-animal/{id}', [HomeController::class, 'loadEditAnimal']);
  Route::post('/animals/delete/{id}', [AnimalController::class, 'deleteAnimal']);
});

Route::middleware([CheckLogout::class])->group(function() {
  Route::get('/acessar', [HomeController::class, 'loadLogin']);
});




//Results Routes
/* Route::get('/animal/{id}', [HomeController::class, 'consultarAnimal']); */
/*Autentificação*/
Route::post('/login', [LoginController::class, 'autenticarLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

