jQuery(document).ready(function(){
    lista_usuarios();
    contar_ticket();
    //$('.contenedor_crud').hide();
    $('.contenedor_nuevoU').hide();
    $('.contenedor_editU').hide();
    $('#capa_1').hide();
    $('#capa_1ActP').hide();
    
    $(document).on('click','#btn_cancelar', function(){
            $('#capa_1').hide(); 
            $('.contenedor_3').hide();
            $('#capa_1ActP').hide(); 
    });
    
    $(document).on('click','#btn_miperfil', function(){
        $('.contenedor_crud').hide(); 
        $('.contenedor_nuevoU').hide();
        $('.contenedor_editU').hide();
    });
    
    
    $(document).on('click','#btn_listarU', function(){        
        lista_usuarios();
        $('.contenedor_crud').show();
        $('.contenedor_nuevoU').hide();
        $('.contenedor_editU').hide();
        /*    $('.contenedor_4').hide();*/
    });
    
    $(document).on('click','#btn_registroU', function(){
        $('.contenedor_crud').hide();  
        $('.contenedor_nuevoU').show();
        $('.contenedor_editU').hide();
    });
//********* EDITA USUARIO **********
    $(document).on('click','#editar_usu', function(){
        $('.contenedor_editU').show();
        $('.contenedor_crud').hide();
        $('.contenedor_nuevoU').hide();
        let elemento = $(this)[0].parentElement.parentElement;
        let id_de_usuario = $(elemento).attr('elmentoid');        
        editar_usuario(id_de_usuario);
    });
//*** FUNCION CONTAR TIKET GENERAL */    
    function contar_ticket(){
        $.ajax({
            type: 'POST',
            url: '../../backend/contar_ticket.php',
        })
        .done(function(num_boleto){            
            var total = JSON.parse(num_boleto);
            for (var i = 0; i < total.length; i++) {
                var tot_bol= total[i].boleto;  
                $('#num_tik').text(tot_bol);            
           } 

        })
        .fail(function(){
            alert ('hubo un error al cargar cantidad de tickets ');
        });

        }
//*** FUNCION CONTAR TIKET POR USUARIO */
/*function contar_ticket(){
    $.ajax({
        type: 'POST',
        url: '../../backend/contar_ticket.php',
    })
    .done(function(num_boleto){            
        var total = JSON.parse(num_boleto);
        for (var i = 0; i < total.length; i++) {
            var tot_bol= total[i].boleto;  




            
            $('#num_tik').text(tot_bol);            
       } 

    })
    .fail(function(){
        alert ('hubo un error al cargar cantidad de tickets ');
    });

    }*/
//** */    
    function editar_usuario(id_de_usuario){
        let id = id_de_usuario;
        var id_envio ={"id_envio":id};     
            
        $.ajax({
          url: '../../backend/editar_usuario.php',
          type: 'POST',
          data: id_envio,
          beforeSend: function(){
                        /*document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; */
                        $('.contenedor_3').hide();
                        $('.contenedor_4').show();
                        
                    },   
            success: function (editusuario){
            console.log (editusuario);
            /*document.getElementById("loading_full").style.display="none";*/  
            const usuarioE = JSON.parse(editusuario);
            let nombres = usuarioE.nombre +' '+ usuarioE.apellido;    
            $('#Id_usuariopsE').val(usuarioE.Id_usuariops);
            $('#cedulaE').val(usuarioE.Cedula);
            $('#nombreE').val(usuarioE.Apellido); 
            $('#apellidoE').val(usuarioE.Nombre); 
            $('#fecha_nacE').val(usuarioE.Fecha_Naci); 
            $('#sexoE').val(usuarioE.Sexo); 
            $('#fono_contacto_1E').val(usuarioE.Contacto); 
            $('#mailE').val(usuarioE.Mail);
            $('#foto_in_E').val(usuarioE.foto_in);    
            $('#status_E').val(usuarioE.Status);                
          }    
        });  
   }
//********* ELIMINA USUARIO **********
    $(document).on('click','#borrar_usu',function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id_de_usuario = $(elemento).attr('elmentoid');
        //alert (id_de_usuario);
        /*$('#id_de_usuario').val(id_de_usuario);*/
        elimina_usuario(id_de_usuario); 
    });
    
function elimina_usuario(id_de_usuario){
    let id = id_de_usuario;
    var id_envio ={"id_envio":id}; 
    //alert ('entró a la función... ok');
    //alert (id);
    if(id == 1){
        alert ('este usuario no se puede eliminar..');
        }else{
            alert ('desea eliminar este usuario definitivamente');
            $.ajax({
                url: '../../backend/eliminar_usuario.php',
                type: 'POST',
                data: id_envio,
                success: function (respuesta)
                    {
                        alert (respuesta);
                        lista_usuarios();
                        /*const item = JSON.parse(respuesta);
                        $('#nombre_estu_bas').val(item.Nombres);
                        $('#apellido_estu_bas').val(item.Apellidos);*/

                    }
            });
        }
}    
//****INSERTA NUEVO USUARIO ******
$(document).on('click','#btn_regNuevo',function(e){
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
                var _form = $("#formulario_new_reg")
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
                    alert(datos);
                    /*document.getElementById("loading_full").style.display="none";      
                    alert (datos);*/
                    lista_usuarios(); 
                    _form[0].reset();
                    $('.contenedor_nuevoU').hide();
                    $('.contenedor_crud').show();    
                        
                    }

                  });
                    
    
                });     
//********* CRUD USUARIOS**********
function lista_usuarios(){
        $.ajax({
          url: '../../backend/crud_usuarios.php',
          type: 'POST',
          /*beforeSend: function(){
                        document.getElementById("loading_full").style.display="block";
                        document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
                    }, */  
          
        })
        .done(function(listas_usuarios){
        //document.getElementById("loading_full").style.display="none";   
        //alert (listas_usuarios);   
        var i = 1;  
        var listas = JSON.parse(listas_usuarios);
        var template='';
        listas.forEach(lista =>{
                template+= `
                <tr elmentoid="${lista.id_usuario}">

                   <td>${i++}</td>                   
                   <td>${lista.Nombre}</td>
                   <td>${lista.Apellido}</td>
                   <td>${lista.Contacto}</td>                  
                   <td>${lista.Perfil}</td> 
                   <td>${lista.status}</td>    
                   <td> <i class='bx bx-edit-alt'id="editar_usu"></i> &nbsp;
                        <i class='bx bxs-user-x' id="borrar_usu"></i> &nbsp;
                        <i class='bx bxs-key' id="perfil_usu_ps"></i>
                   </td>    
                    
                </tr>`;                
                $('#listados_usuR').html(template);
               
              });
   
        })
        .fail(function(){
          alert('Hubo un errror al cargar los usuarios');
        });  

}
//**** ACTUALIZA  USUARIO ******
$(document).on('click','#btn_editaU',function(e){
                e.preventDefault();
                var _form = $("#formulario_edit_reg");
                //alert ("funciona le boron enviar"); 
                var datos = new FormData($("#formulario_edit_reg")[0]);                
                  $.ajax({
                     url: '../../backend/actualiza_usuarios.php',
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
                    lista_usuarios(); 
                    _form[0].reset();
                    $('.contenedor_editU').hide(); 
                    $('.contenedor_crud').show();    
                    }

                  });                   
    
                });     
//********* IDENTIFICA  USUARIO PARA PERFIL **********
$(document).on('click','#perfil_usu_ps',function(){
        
        let elemento = $(this)[0].parentElement.parentElement;
        var id_de_usuario = $(elemento).attr('elmentoid');
        //console.log (id_de_usuario); 
        busca_usuario(id_de_usuario);
        if(id_de_usuario == 1){
        alert ('No se puede modificar el perfil a este usuario');
        
        }else{
            verficar_perfil(id_de_usuario);
                    }
         
    });
//****INSERTA /ACTUALIZA PERFIL PERFIL USUARIO ******
function verficar_perfil(id_de_usuario){
    let id = id_de_usuario;
    var id_envio ={"id_envio":id};
        $.ajax({
        url: '../../backend/comprueba_perfil.php',
        type: 'POST',
        data: id_envio,
        /*beforeSend: function(){
            document.getElementById("loading_full").style.display="block";
            document.getElementById("loading_full").innerHTML="<img id='img_lo' src='../../imagenes/loding_1.gif' width='300' height='300'>"; 
        },*/
        success: function(datos)
        {
            //alert(datos);
            if (datos==1){
                $('#capa_1ActP').show();
                $(document).on('click','#btn_actualiperfil',function(e){
                e.preventDefault();
                //alert ("es un boton actualiza"); 
                var _formAct = $("#form_perfilesActP");
                //alert ("funciona le boron asignar"); 
                var datos = new FormData($("#form_perfilesActP")[0]);                
                $.ajax({
                    url: '../../backend/actualiza_perfiles.php',
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
                    //_formAct[0].reset();
                    $('#capa_1ActP').hide(); 
                    $('.contenedor_3').hide();
                    location.reload();    
                    }
                });    
                
                })
                }            
                else{
                $('#capa_1').show();
                $(document).on('click','#btn_asignarperfil',function(e){
                e.preventDefault();
                //alert ("es un boton");
                var perfil = $('#perfil').val();
                if ( perfil == ""){
                    alert ("Debe escoger un perfil");
                    exit();
                  }
                  var _formP = $("#form_perfiles");
                  //alert ("funciona le boron asignar"); 
                  var datos = new FormData($("#form_perfiles")[0]);                
                $.ajax({
                url: '../../backend/inserta_perfiles.php',
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
                    //_formP[0].reset();
                    //$('#capa_1').hide(); 
                    //$('.contenedor_3').hide();
                    //lista_usuarios();      
                    location.reload();
                       

                 }

                });    
                  
                });
                
            }

        }

            });
}    

//***UN SOLO USUARIO ******
function busca_usuario(id_de_usuario){
    let id = id_de_usuario;
    var id_envio ={"id_envio":id}; 
    
    //alert ('entró a la función... ok');
    //alert (id);
    $.ajax({
        url: '../../backend/solo_usuario.php',
        type: 'POST',
        data: id_envio,
        success: function (respuesta)
            {
                console.log (respuesta);
                const item = JSON.parse(respuesta);
                var nombres_com =  item.Nombre +' '+item.Apellido;
                $('#nombres_com').text(nombres_com);
                $('#Id_usuariospP').val(item.Id_usuariops);
                $('#Id_usuarioynActP').val(item.Id_usuariops);
                $('#usuarioP_').val(item.Mail);
                $('#usuarioActP').val(item.Mail);
                $('#passwordP_').val(item.Cedula);
                $('#passwordActP').val(item.Cedula);
                $('#perfilActP').val(item.Perfil);
               
                
            }
    });


}
  
    
    
    
    
//FIN DE TODO *****    
})