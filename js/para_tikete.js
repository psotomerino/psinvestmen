jQuery(document).ready(function(){

   $('.tikete').hide();
   var id_usu = $('#este_id').text();    
    
   $(document).on('click','#venta', function(){
            $('.grid-container').hide(); 
            //$('.tikete').show();
            $('#Id_usuariospP').val(id_usu); $(window).attr('location','https://checkout.stripe.com/pay/cs_live_a1A3POncs7hmaKtZQbvcI2fUSk3ZJ7g4wQ3GuUDeGVlaSx0yLHttXtjzrF#fidkdWxOYHwnPyd1blppbHNgWjA0STEzYmxASEpQUHF1SGpXT2NPMzJ3T0wzN0ldNGxQXTVSSGRvVGlyZkJDcFcxcFVLYUIxZHVqa29IVmFpYHVnVzJLQ1F2X2p0dH8xf2FJYmF2NEBKRHVGNTVINzVRfEBOSicpJ3VpbGtuQH11anZgYUxhJz8nMG5EYjc1MD1OMkI2YHVSZ0xMJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKmZtYGZuanBxK3Zxd2x1YCtmamgqJ3gl');
           
            
    }); 
        
   $(document).on('click','#Reg_venta', function(){
            $('.grid-container').hide(); 
            $('.tikete').show();
            $('#Id_usuariospP').val(id_usu); 
           
            
    });
    $(document).on('click','#volver', function(){
            $('.grid-container').show(); 
            $('.tikete').hide();
            
    });
//***REGISTRO DE VENTA *** 
$(document).on('click','#btn_registrar_v',function(e){
                e.preventDefault();
                var _form = $("#form_venta")
                //alert ("funciona le boron enviar"); 
                var datos = new FormData($("#form_venta")[0]);                
                  $.ajax({
                     url: '../../backend/inserta_ventas.php',
                     type: 'POST',
                     data: datos,
                     contentType: false,
                     processData: false,
                     /*beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    }, */ 
                    success: function(datos)
                    {
                    alert(datos);
                    /*document.getElementById("loading_full").style.display="none";      
                    alert (datos);*/
                    _form[0].reset();
                    $('.tikete').hide();
                    $('.grid-container').show();    
                    }

                  });           
    
                }); 


    
//*****FIN DE TODO    
})

