jQuery(document).ready(function(){
    
//****INSERTA NUEVO USUARIO ******
$(document).on('click','#btn_regNuevo_fuera',function(e){
                e.preventDefault();
                var cedula = $('#cedula').val();
                var nombre = $('#nombre').val();
                var apellido = $('#apellido').val();
                var fecha_nac = $('#fecha_nac').val();
                var contacto = $('#fono_contacto_1').val();
                var mail = $('#mail').val();
                
                if ( cedula == ""){
                    alert ("Falta ingresar su número de identificación");
                    exit();
                }                    
                if ( nombre == ""){
                    alert ("Falta ingresar sus nombres");
                    exit();
                }                    
                if ( apellido == ""){
                    alert ("Falta ingresar sus apellidos");
                    exit();
                }                    
                if ( fecha_nac == ""){
                    alert ("Falta ingresar su fecha de nacimiento");
                    exit();
                }                    
                if ( contacto == ""){
                    alert ("Falta ingresar su número de contacto");
                    exit();
                }                    
                if ( mail == ""){
                    alert ("Falta ingresar su correo electrónico");
                    exit();
                }
    
                var R_form = $("#formulario_new_reg")
                //alert ("funciona le boron enviar"); 
                var datos = new FormData($("#formulario_new_reg")[0]);                
                  $.ajax({
                     url: '../../backend/inserta_usuarios.php',
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
                    alert("Se ha registrado correctamente, espere la llamada de uno de nuestros asesores");
                    /*document.getElementById("loading_full").style.display="none";      
                    alert (datos);*/
                    //lista_usuarios(); 
                    R_form[0].reset();
                    //$('.contenedor').hide();
                    window.location.href="https://pysgroup.jireh.edu.ec/index.html";
                    }

                  });
                    
    
                });     

    
//FIN DE TODO *****    
})