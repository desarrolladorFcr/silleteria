var funSillas = {
    
    inicio:function(){
        
        /*
         *funciones para el  datapicket 
         */
      
//        $('#fechaCamp').datepicker({
//            dateFormat: "yy-mm-dd"
//        });
//       
//        $('#fechaCamp').change(function(){
//            console.log($('#fechaCamp').val());
//        });
        
        
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
        var $idUser = $('[name=usuarioId]').val();
        $idSilla = $(this).data('id');
        $color = $(this).css('background-color');
        
        if($color=='rgb(255, 0, 0)'){
            $.post('/rojo','id='+$idSilla+'&_token='+$_token, function (res){
                $array= JSON.parse(res);
//                $array[0]= columna
//                $array[1]= fila
                  $posicion = '#'+$array[0]+'-'+$array[1];
                 $($posicion).css('background','#9acfea');
            });
        }else{
            console.log('&_token='+$_token+'usuarioId='+$idUser);
           
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

