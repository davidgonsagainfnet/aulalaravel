<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function login(Request $request){

        $credencial = $request->only('email', 'password');

        Auth::logout();

        if(Auth::attempt($credencial)){
            
            Mail::send('email', [], function($m){
                $m->from('alunosctec@gmail.com','Laravel Automatico');
                $m->to('davidgonsaga@gmail.com');
                $m->subject('Novo Usuario Logado teste');
            });

            return redirect()->intended('/');

        } 
        
        return back()->withErrors(['erro' => 'Login e senha invalido'])->withInput();

    }
}
