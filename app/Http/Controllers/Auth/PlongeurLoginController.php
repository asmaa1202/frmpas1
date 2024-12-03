<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlongeurLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:plongeurs');
    }

    public function showLoginForm()
    {
        return view("auth.plongeur-login");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "email" => 'required|email',
            "password" => 'required',
        ]);

        if (Auth::guard('plongeurs')->attempt([
            "email" => $request->email,
            "password" => $request->password,
        ], $request->remember)) {
            return redirect()->intended(route("plongeur.dashboard"));
        }

        return redirect()->back()->withInput($request->only("email", "remember"));
    }

}
