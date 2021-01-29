<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\animals;
use APP\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function autenticarLogin(Request $req)
    {
        $user = user::where('ds_email', $req['ds_email'])->first();

        if (Hash::check($req['ds_password'], $user['ds_password'])) {
            $req->session()->put('user', $user);
            return redirect('/adocao');
        }
            return redirect('/acessar');
    }

    public function updateUser(Request $req) {
        $user = user::find($req['id_user']);

        $user['nm_user'] = $req['nm_user'];
        $user['ds_public_place'] = $req['ds_public_place'];
        $user['ds_complement'] = $req['ds_complement'];
        $user['nm_neighborhood'] = $req['nm_neighborhood'];
        $user['nr_cep'] = $req['nr_cep'];
        $user['nr_phone'] = $req['nr_phone'];
        $user['ds_email'] = $req['ds_email'];
        $user['ds_bio'] = $req['ds_bio'];
        $user['dt_birth'] = $req['dt_birth'];

        if(!is_null($req['new_ds_password'])) {
            if(Hash::check($req['ds_password'], $user['ds_password'])) {
                $user['ds_password'] = Hash::make($req['new_ds_password']);
            } else {
                return redirect('/perfil')->with('error', 'A senha não pode ser salva');
            }
        }

        $user->save();
        return redirect('/perfil')->with('success', 'As informações foram salvas com sucesso');



    }

    public function logout(Request $req) {
        $req->session()->flush();
        return redirect('/acessar');
    }
}
