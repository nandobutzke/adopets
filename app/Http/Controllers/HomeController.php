<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\animals;


class HomeController extends Controller
{
    //

    public function funcao(Request $req) {
        
        $user = new user();
        $user->fill($req->all());
        $user->save();

        return $user;
    }

    public function animal(Request $req) {
        $animal = new animals();
        $req['id_user'] = 1;
        $animal->fill($req->all());
        $animal->save();

        return $animal;
    }

    //loadPages

    public function loadAnimal(Request $req) {
        $animal = animals::get();
        return view('animal', compact('animal'));
    }

    public function loadHome(Request $req) {
        $user = user::get();
        return view('home', compact('user'));
    }

}
