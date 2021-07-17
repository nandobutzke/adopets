<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userRegister(Request $req) {

        $user = new user();
        $req['ds_password'] = Hash::make($req['ds_password']);

        if ($req->file('photo_user')) {
            $path = $req->file('photo_user')->store('animal');
            $user['img_user'] = $path;
        }

        $user->fill($req->all());
        $user->save();

        return redirect('/animais');
    }

    public function userImage($id) {
        $users = user::find($id);
        if (isset($users['img_user']) && !is_null($users['img_user'])) return response()->file(storage_path('app/' . $users['img_user']));
        abort(404);
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

        if ($req->file('photo_user_edit')) {
            $path = $req->file('photo_user_edit')->store('animal');
            $user['img_user'] = $path;
        }

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
}
