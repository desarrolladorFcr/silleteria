@extends('layouts.app')
@section('titulo', 'Cinema Paraiso')

@section('contenido')

    <h3> Características</h3>
    @foreach($boletos as $boleto)

        Costo entrada {{$boleto->caracteristica}}: {{$boleto->costo}}
        
        <br>
        <br>
        <a id="bactu" href="#">
            ACTUALIZAR
        </a> 

    @endforeach
     
    <form method="get" action="/sala">
        <input type="submit" value="volver" class="btn-link btn-lg">
    </form>
    
    <div id="msj_act">
        <form action="/actualizarCosto" method="post">
            {{csrf_field()}}
            <label>Costo:</label>
            <input type="text" name="costo">
            <input type="submit" value="ENVIAR">
        </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('js/funConfg.js')}}"></script>
    
   
@endsection

