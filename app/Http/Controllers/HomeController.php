<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\animals;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //

    public function userRegister(Request $req) {
        
        $user = new user();
        $req['ds_password'] = Hash::make($req['ds_password']);
        $user->fill($req->all());
        $user->save();

        return $user;
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
