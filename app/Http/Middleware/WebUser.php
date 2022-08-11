<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class WebUser
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

        $is_admin = Session::get('user_type');
        // dd($user->is_super_admin);
        if($is_admin == 'customer' ){
            return $next($request);
        }
        else{
           dd('User type error');
        }
    }
}
