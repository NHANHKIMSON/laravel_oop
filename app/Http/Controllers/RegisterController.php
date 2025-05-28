<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
        // dd(request()->all());
        $attrs = request()->validate([
            'name'=> ['required'],
            'email'=>['required', 'email'],
            'password'=>['required', Password::min(6), 'confirmed']
        ]);
        // dd($attrs);
        $user = User::create($attrs);
        Auth::login($user);
        return redirect('/');
    }
}
