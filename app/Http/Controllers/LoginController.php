<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }

    function login(Request $request){
        Mail::send('email', [], function($m){
            $m->from('alunosctec@gmail.com','Laravel Automatico');
            $m->to('davidgonsaga@gmail.com');
            $m->subject('Novo Usuario Logado teste');
        });
        dd('Email enviado');
    }
}
