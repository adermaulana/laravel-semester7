<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request) {

        $user = Auth::user();

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->level == 'admin') {
                return redirect()->intended('hasil-bank');
            } elseif ($user->level == 'guest') {
                return redirect()->intended('hasil-bank');
            }
        
        }

        return back()->with('loginError','Login Failed');

    }

    public function logout(Request $request){
        if(Auth::logout());

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }
}
