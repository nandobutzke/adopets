<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\animals;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function loadEditAnimal(Request $req, $id) {
        $user = user::find($req->session()->has('user'));
        $animal = animals::find($id);

        return view('landing.editAnimal', compact('user', 'animal'));
    }

    public function loadProfile(Request $req) {
        $user = user::find($req->session()->has('user'));
        $animals = animals::get();

        return view('landing/profile', compact('user', 'animals'));
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

}
