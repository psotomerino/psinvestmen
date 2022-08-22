//alert ("hola");
let id = (id) => document.getElementById(id);
let classes = (classes) => document.getElementsByClassName(classes);

let cedula = id("cedula"),
  nombres = id("email"),
  apellidos  = id("password"),
  form = id("formulario_new_reg"),
  errorMsg = classes("error");
  /*successIcon = classes("success-icon"),
  failureIcon = classes("failure-icon");*/
form.addEventListener("btn_regNuevo_fuera", (e) => {
  e.preventDefault();

  engine(cedula, 0, "Username cannot be blank");
  engine(nombres, 1, "Email cannot be blank");
  engine(apellidos, 2, "Password cannot be blank");
});

$(document).on('click','#btn_regNuevo_fuera',function(e){
                e.preventDefault();
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
