<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\animals;
use APP\Http\Middleware\CheckLogin;


class LoginController extends Controller
{
    public function autenticarLogin(Request $req)
    {   
        $user = user::where('ds_email', $req['ds_email'])->first();

        if ($user['ds_password'] == $req['ds_password']) {
            $req->session()->put('user', $user);
            return redirect('/adocao');
        }
            return redirect('/acessar');
    }

    public function logout(Request $req) {
        $req->session()->flush();
        return redirect('/acessar');
    }
}
