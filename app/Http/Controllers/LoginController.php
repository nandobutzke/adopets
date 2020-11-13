<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;


class LoginController extends Controller
{
    public function autenticarLogin(Request $req)
    {   
        $user = user::where('ds_email', $req['ds_email'])->first();

        if ($user['ds_password'] == $req['ds_password']) {
            return view('landing/loginAccept');
        } else {
            return redirect('/acessar');
        }
    }
}
