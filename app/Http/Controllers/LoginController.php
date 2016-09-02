<?php

namespace Videotienda\Http\Controllers;

use Illuminate\Http\Request;

use Videotienda\Http\Requests;

use Auth;

class LoginController extends Controller
{
    public function logueo(){
        
        return view('login',['titulo' => 'INGRESO AL SISTEMA DE RESERVA']);
    }
    
    public function registro(){
        
        return view('registro', ['titulo' => 'REGISTRO DE USUARIOS']);
    }
    
    public function cerrar(){
        
        Auth::logout();
        
        return redirect('/');
    }
    
}
