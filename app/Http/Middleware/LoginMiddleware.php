<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class LoginMiddleware
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
        // 判断session里是否有用户名
        if(!empty(session('wh_userName'))){
            return $next($request);
        }else{
            return redirect('/login');
        }
        
    }

}
