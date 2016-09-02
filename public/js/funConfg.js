var func ={
    inicio:function(){
       $('#msj_act').dialog({
         autoOpen:false  
    });  
    
   $('#bactu').click(func.mostrar);
   
   return false;
    },
    
    mostrar:function(){
       $('#msj_act').dialog('open'); 
    }
}

$(document).ready(func.inicio);
