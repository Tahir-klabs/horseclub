<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class Leader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if (Auth::check())
        // {
     
        //      if(Auth::user()->role_id == 2){
        //         return $next($request);
        //      }
        // }
        // return redirect()->back()->with('error','Access Denied');

        if (Auth::check()) {
            
            if(Auth::user()->role_id != 2)
            {
                return redirect()->guest('/');
            }
        }
        else
        {
            return redirect()->guest('/');
        }

        return $next($request);
    }
}
