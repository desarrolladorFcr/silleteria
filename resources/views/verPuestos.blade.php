@extends('layouts.app')

@section('titulo', 'Cinema Paraiso')

@section('contenido')

<h4>{{$titulo}}</h4>

<div class="row alert-danger">
    <div class="col-md-6">
        Bienvenido: {{$usuario}}
    </div>
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

            <form action="/cerrar" method="POST">
                {{csrf_field()}}
                <input type="submit" value="Cerrar sesión" class="btn-link">
            </form>
        </div>
    </div>
</div>

<div>
    <table class="">
        @foreach($columnas as $col)
        <tr>
            @foreach($filas as $fila)
            <td>
                <a href="#" id="{{$col->columna_id}}-{{$fila->fila_id}}" style="background: #9acfea" 
                   data-id='{{$col->columna_id}}-{{$fila->fila_id}}' class="list-group-item">
                    {{$col->nom_columna}}
                    {{$fila->nom_fila}}
                </a>
            </td>
            @endforeach
        </tr>

        @endforeach

    </table>
</div>

<form>
    {{csrf_field()}}
    <input type="hidden" value="{{$usuarioId}}" name="usuarioId">
</form>

<table class="table-condensed">
    <tr>
        <th>
            Reservado
        </th>
        <th style="background: red">
            __
        </th>
    </tr>
    <tr>
        <th>
            Sin reservar
        </th>
        <th style="background: #9acfea">
            __
        </th>
    </tr>
</table>

<div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-2">
        @if($rol == 2)
            @include('layouts.pagarForm')
        @endif
        @if($rol == 1)
            @include('layouts.configForm')
        @endif
    </div>
    <div class="col-md-5">

    </div>
</div>

@if($rol==1)
    <script src="{{asset('js/funcionesSilleteriaAdm.js')}}"></script>
@endif
@if($rol==2)
    <script src="{{asset('js/funcionesSilleteriaGen.js')}}"></script>
@endif
<script src="{{asset('js/funcionAtras.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

@endsection
