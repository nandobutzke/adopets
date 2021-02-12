<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\animals;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function userRegister(Request $req) {

        $user = new user();
        $req['ds_password'] = Hash::make($req['ds_password']);

        if ($req->file('photo')) {
            $path = $req->file('photo')->store('animal');
            $user['img_user'] = $path;
        }

        $user->fill($req->all());
        $user->save();

        return redirect('/animais');
    }

    //loadPages
    public function loadEditAnimal(Request $req, $id) {
        $user = user::find($req->session()->has('user'));
        $animal = animals::find($id);
        //return $animal;
        return view('landing.editAnimal', compact('user', 'animal'));
    }

    public function loadProfile(Request $req) {
        $user = user::find($req->session()->has('user'));
        $animals = animals::get();
        return view('landing/profile', compact('user', 'animals'));
    }

    public function userImage($id) {
        $users = user::find($id);
        if (isset($users['img_user']) && !is_null($users['img_user'])) return response()->file(storage_path('app/' . 'animals/' . $users['img_user']));
        abort(404);
    }

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

    // Delete animal




}
