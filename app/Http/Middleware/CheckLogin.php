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

        $user = user::where('ds_email', $req['ds_email'])->first();

        
        /* if(Hash::check($user['ds_password'], $req['ds_password']) {
            $req->session()->put('user', $user);
            return $next($req);
        } */

        return redirect('/');
    }
}
