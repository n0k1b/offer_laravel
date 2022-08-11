<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        return $next($request);
        // $user = Session::get('user');
        // $is_admin = Session::get('user_type');
        // // dd($user->is_super_admin);
        // if($is_admin == 'admin' || $is_admin == 'vendor'){
        //     return $next($request);
        // }
        // else{
        //    dd('User type error');
        // }
    }
}
