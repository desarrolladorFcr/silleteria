@extends('layouts.app')
@section('titulo','Ingreso')
@section('contenido')
@include('common.errors')

<div>
    <h4>{{$titulo}}</h4>
</div>

<form method="POST" action="auth/login" class="form">
    
    {{csrf_field()}}
    <input type="text" name='email' placeholder="CORREO ELECTRÓNICO" class="form-control form-group-sm">
    <input type="password" name="password" placeholder="CONTRASEÑA" class="form-control form-group-sm" >
    <!--<input type="checkbox" name="remember"> Remember Me <br>-->
    <input type="submit" value="ENVIAR" class="btn-link">
</form>

<br><br>

<form action="/registro">
    <input type="submit" value="REGÍSTRESE" class="btn-link">
</form>

@include('layouts.advertencia')

<script src="{{asset('js/funcionAtras.js')}}"></script>

@endsection

