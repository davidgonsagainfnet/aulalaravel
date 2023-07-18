<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function index(){
        $users = DB::table('usuarios_david')->paginate(5);
        return view('teste', ['users' => $users]);
    }

    function newuser(){
        return view('formulario_user');
    }

    function incluirusuario(Request $request){

        $validacao = Validator::make($request->all(), [
            'nome'         => 'required',
            'email'        => 'required|email',
            'password'     => 'required|min:6',
            'password_new' => 'required|same:password'
        ],[
            'nome' => 'Informa o nome de usuario',
            'email' => 'Informe um email valido',
        ]);

        if($validacao->fails()){
            return redirect()->back()->withErrors($validacao)->withInput();
        }

        $senha = Hash::make($request->password);

        DB::insert('insert into usuarios_david (nome, email, senha) values (?, ?, ?)', [$request->nome,$request->email,$senha]);
        return redirect()->route('home');
    }
}
