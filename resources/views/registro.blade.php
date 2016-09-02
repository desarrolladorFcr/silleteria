@extends('layouts.app')
@section('titulo', 'Nuevo')
@section('contenido')
@include('common.errors')
<h4>
{{$titulo}}
</h4>
<form method="POST" action="auth/register">
    
    {{csrf_field()}}
    <input type="text" name="name" placeholder="NOMBRE" class="form-control">
    <input type="text" name='email' placeholder="CORREO ELECTRÓNICO" class="form-control form-group-sm">
    <input type="hidden" name="rol" value="2">
    <input type="password" name="password" placeholder="CONTRASEÑA" class="form-control form-group-sm" >
    <input type="password" name="password_confirmation" placeholder="CONFIRME CONTRASEÑA" class="form-control">
    <input type="submit" value="ENVIAR" class="btn-link">
</form>

@include('layouts.advertencia')

@endsection
