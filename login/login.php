<?php
    include '../templates/estructura.html';
    session_start();
    if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['tipo_usuario']== "Admin"){
			header('Location: ../main_app/admin/');            
		}else if($_SESSION['usuario']['tipo_usuario']== "Asesor"){
			header('Location: ../main_app/asesor/');
		}/*else if($_SESSION['usuario']['tipo_usuario']== "docente"){
			header('Location: main_app/docente/');
		}else if($_SESSION['usuario']['tipo_usuario']== "estudiante"){
			header('Location: main_app/estudiante/');
		}else if($_SESSION['usuario']['tipo_usuario']== "curricular"){
			header('Location: /main_app/curriculares/');
		}*/
	}
    //header('location: ../../login/login.php');

?> 
<link rel="stylesheet" href="../css/para_login.css">
<style>
    #logo_cont{
        width: 100%;
        align-self: center;
        
    }
    .txt_{
        color: azure;
        text-decoration: none;            
    }  
</style>
<body class="bg-dark">
<section>
    <div class="row g-0">
        <div class="col-lg-7"> </div>
    </div>
    <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100 nb-auto">
        <div class="" id="logo_cont" >
           <center>
            <img src="../imagenes/logo_1-02.png" alt="" class="img-fluid w-50">     
           </center>
            
        </div>    
        <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
            <h1 class="font-weight-bold mb-4">BIENVENIDO</h1>           
            <form class="mb-5" action="" id="formlg">
                <div class="nb-4">
                    <label for="usuariolg" class="form-label font-weight-bold">Usuario</label>
                    <input type="text" class="form-control bg-dark-x border-0 " name="usuariolg"  id="usuariolg" required>
                </div>         
                <div class="mb-4">
                    <label for="contra" class="form-label font-weight-bold">Contraseña</label>
                    <input type="password" name="passlg" class="form-control bg-dark-x border-0"  required>
                </div> 
                <button class="btn btn-primary w-100" id="IngresoLog" type="submit">Iniciar Sesión</button> 
            </form>
            <a href="https://www.psinvestmen.com/" class="txt_" >Ir a la pagina principal </a>
        </div>    
    </div>    
</section>
</body>
<script>
    $(document).ready(function () {
      $('#menu').load('../templates/header.html');
    });
</script>
<script src="../js/para_login/main.js"></script>  
</html>





   
                 
                

