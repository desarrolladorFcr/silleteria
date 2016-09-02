<?php

namespace Videotienda\Http\Controllers;

use Illuminate\Http\Request;
use Videotienda\Http\Requests;
use Videotienda\Boletos;
use Videotienda\Filas;

class TransController extends Controller {

    public function mostrar() {
        
        $boleto = Boletos::where('id_boleto',1)->get();
        $filas = Filas::all();
        
        return view('configuraciones', ['boletos'=>$boleto, 'filas'=>$filas]);
    }
    
    public function Costo(Request $request){
        
        $boleto = Boletos::find(1);
        
        $boleto->costo = $request->input('costo');
        $boleto->save();
        return redirect('/configurar');
    }

    public function total() {
        
        $boleto = Boletos::where('id_boleto',1)->get();
        
    }

}
