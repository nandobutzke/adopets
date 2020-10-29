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

    public function loadAnimal(Request $req) {
        $animals = animals::get();
        return view('animal', compact('animals'));
    }

    public function loadHome(Request $req) {
        $user = user::get();
        return view('home', compact('user'));
    }

    public function consultarAnimal(Request $req) {
        $animal = animals::find($req->id);
        return view('animalResults', compact('animal'));
    }
}
