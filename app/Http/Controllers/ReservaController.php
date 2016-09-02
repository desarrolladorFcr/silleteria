<?php

namespace Videotienda\Http\Controllers;

use Illuminate\Http\Request;
use Videotienda\Http\Requests;
use Videotienda\Columnas;
use Videotienda\Filas;
use Illuminate\Http\Response;
use Auth;

class ReservaController extends Controller {
    
    public function verPuestos(Request $request) {
        
        $columnas = Columnas::all();
        
        $filas = Filas::all();
        
        $datosusuario = Auth::user();
        $usuario = $datosusuario->name;
        $rol = $datosusuario->id_role;
        $idUser =$datosusuario->id;
       
        return view('verPuestos', ['titulo' => 'CINEMA PARAISO', 'columnas' => $columnas, 'filas'=>$filas, 
            'usuario'=>$usuario, 'rol'=>$rol, 'usuarioId' =>$idUser]);
    }
    
    public function ocupados(){
        
        $filas = Filas::all();
        $ocupa = array();
        foreach ($filas as $fila){
            
            foreach($fila->columnas as $columna){
                
                $puesto = $columna->pivot->columna_id.'-'.$columna->pivot->fila_id;
                array_push($ocupa, $puesto);
            }
        }
        
        echo json_encode($ocupa);
    }
    
    public function despegar(Request $request){
            
            $idSilla = $request->input('id');

//            $arrayIds[0]= a la columna
//            $arrayIDs[1] = a la fila
            $arrayIds = explode('-', $idSilla);
            $filas = Filas::find($arrayIds[1]);
            $filas->columnas()->detach($arrayIds[0]);
            
            echo json_encode($arrayIds);
        
    }
    
    public function pegar(Request $request){
        
        $idSilla = $request->input('id');
        
//        $arrayIds[0] = a la columna
//        $arrayIDs[1] = a la fila
        $arrayIds = explode('-', $idSilla);
        $filas = Filas::find($arrayIds[1]);
        $filas->columnas()->attach($arrayIds[0],['id_usuario'=> $request->input('usuarioId')]);
        
        echo json_encode($arrayIds);
    }

}
