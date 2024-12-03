<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {

        if ($request->expectsJson()) {
            return null;
        } else {
            $guards = empty($guards) ? [null] : $guards;

            foreach ($guards as $guard) {
                if (Auth::guard($guard)->check()) {
                    switch ($guard) {
                        case 'plongeurs':
                            $login = "plongeur.login";
                            break;
                        default:
                            $login = 'login';
                            break;
                    }
                    return route($login);
                } else {
                    if ($request->getRequestUri() == '/plongeur') {
                        return route("plongeur.login");
                    }
                    return route("login");
                }
            }
        }
    }
}