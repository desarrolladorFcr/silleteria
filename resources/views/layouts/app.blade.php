<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            @yield('titulo')
        </title>

        <link rel="stylesheet" href="{{asset('estilosSala.css')}}">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src='{{asset('js/jquery.js')}}'></script>
    </head>

    <body>
        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>

