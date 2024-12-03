<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  
    public function handle(Request $request, Closure $next, $role): Response
    {
        // dd(Auth::user()->active);
        // if(Auth::user()->active == 0){
        //     auth()->logout();
        //     return redirect('/')->with('success' ,'Votre compte est en attente d\'approbation par l\'administrateur.');
        // }

        if (Auth::check() && Auth::user()->role_id == $role &&  Auth::user()->active == 1) {
            return $next($request);
        }
        
        abort(404, 'NOT FOUND');
        
    }
}
