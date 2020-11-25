<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $req, Closure $next)
    {
        if($req->session()->has('user')) {
            return $next($req);
        }

        return redirect('/acessar');
        
        
        
        
        
        //$user = user::where('ds_email', $req['ds_email'])->first();
        /* $req->session()->put($password, $user); */

       /*  $password = Hash::make($req['ds_password']);
        
        if(Hash::check($req['ds_password'], $password)) {
            
            return redirect('/adocao')->with('success', 'Sucesso! O login foi realizado com sucesso!');
        } else {
            return redirect('/acessar')->with('error', 'Opa! O acesso foi interrompido!');
        } */
        //$req->session()->flush();
    }
}
