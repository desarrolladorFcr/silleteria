var funSillas = {
    
    inicio:function(){
        
        /*
         * Se oculta el mensaje de no tener privilegios
         * de quitar reserva
         */
        $('#msj_ocupado').dialog({
                autoOpen:false
            });
        
        /*
         * Se selecciona los elementos a
         */
        $('a').click(funSillas.reservar);
        var $_token= $('[name=_token]').val();
        $.post('/ocupadas','_token='+$_token,function(res){
            
            $puestos = JSON.parse(res);
  
            for($i=0; $i<$puestos.length; $i++){
                id="#"+$puestos[$i];
                $(id).css('background','red');
            }
        });

    },
    
    reservar:function (){
        
        var $_token= $('[name=_token]').val();
        $idSilla = $(this).data('id');
        var $idUser = $('[name=usuarioId]').val();
        $color = $(this).css('background-color');
        
        /*
         *Al no tener privilegios de quitar reserva
          se le indica que el puesto está ocupado 
         */
        
        if($color=='rgb(255, 0, 0)'){
            
            $('#msj_ocupado').dialog('open');
        }else{
            $.post('/azul', 'id='+$idSilla+'&_token='+$_token+'&usuarioId='+$idUser, function (res){
                 $array= JSON.parse(res);
//                $array[0]= columna
//                $array[1]= fila
            $posicion = '#'+$array[0]+'-'+$array[1];
            $($posicion).css('background','red');
            });
        }
    }
};

$(document).ready(funSillas.inicio);

