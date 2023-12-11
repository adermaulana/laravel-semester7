<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index() {

        return view('auth.registrasi');
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success','Registration successfull! please Login');

        return redirect('/login')->with('success','Registration successfull! Please login');

    }
}
