<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\animals;


class HomeController extends Controller
{
    //

    public function userRegister(Request $req) {
        
        $user = new user();
        $user->fill($req->all());
        $user->save();

        return $user;
    }

    public function animalRegister(Request $req) {
        $animal = new animals();
        $req['id_user'] = 1;
        $animal->fill($req->all());
        $animal->save();

        return redirect('/adocao');     //Return a JSON with animal informations
    }

    //loadPages

    public function loadHome(Request $req) {
        $user = user::get();
        $animals = animals::get();
        return view('landing/home', compact('user', 'animals'));
    }

    public function loadUserRegister(Request $req) {
        $user = user::get();
        return view('landing/userRegister', compact('user'));
    }

    public function loadAnimalRegister(Request $req) {
        $animals = animals::get();
        return view('landing/animalRegister', compact('animals'));
    }

    public function adoptAnimal() {
        $animal = animals::get();
        return view('landing/adoption', compact('animal'));
    }

    public function loadLogin() {
        $user = user::get();
        return view('landing/login', compact('user'));
    }

    //Results animals

    public function consultarAnimal(Request $req) {
        $animal = animals::find($req->id);
        return view('landing/animalResults', compact('animal'));
    }

    //Update db

    public function alterarAnimal(Request $req) {
        $animal = animals::find($req['id_animal']);
        $animal->save();
        return redirect('/');
    }


}
