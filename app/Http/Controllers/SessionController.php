<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        $attrs = request()->validate([
            'email'=>['required', 'email'],
            'password' => ['required', Password::min(8)]
        ]);
        $user = $attrs;
        if(!Auth::attempt($attrs)){
            throw ValidationException::withMessages([
                'email'=> 'Wrong username!'
            ]);
        }
        request()->session()->regenerate();
        return redirect('job');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
