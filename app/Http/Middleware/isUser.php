<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    	if(!Auth::check()){
            return redirect()->route('login');
        }else{
            if(Auth::user()->is_admin !== 0){
                echo "Kamu bukan user!"; die;
            }
        }

        return $next($request);
    }
}
