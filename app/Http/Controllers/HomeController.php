<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class HomeController extends Controller
{
    public function funcao(Request $req) {
        
        $user = new user();
        $user->fill($req->all());
        $user->save();

        return $user;
    }
}
