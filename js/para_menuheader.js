jQuery(document).ready(function(){
    
    $('#menu_movil').hide();
    
    $(document).on('click','#btn_movil', function(){  
        $('#menu_movil').show();
        $('#menu_').hide();
    });
    
    $(document).on('click','#btn_cerrar', function(){  
        $('#menu_movil').hide();
        $('#menu_').show();
    }); 
//******FIN DE TODO *******    
})