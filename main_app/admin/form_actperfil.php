<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: https://www.psinvestmen.com/');
        exit();
    }

?>
<style>
    #capa_1ActP{
        background-color: rgba(0,0,0,0.7);
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
    } 
    .formActP{
        color: black;
        position: relative;
        width: 30%;
        height: 55%;
        background-color: #EEE;
        top: 20%;
        margin: -25px 0 0 -25px; 
        padding: 20px;
        
    }
    .form1ActP{
        font-size: 22px;
        font-family:fantasy;
    }
    h3 {
        color: red;
    }
</style>
<div id="capa_1ActP">
    <div class="formActP">
        <center> 
       <div class="row">
           <div class="col-12"><h3>ACTUALIZACION DE PERFIL</h3></div>
       </div>
       
        <div class="row">
            <div class=" col-12 form1ActP"></div>
        </div>
        <div class="row">
            <div class="col-12">
              <h6><b id="nombres_com"></b></h6>
               <form action="" id="form_perfilesActP">
                <input type="hidden" class="form-control" id="Id_usuarioynActP" name="Id_usuarioynActP">   
                    <select  class="form-control" id="perfilActP" required name="perfilActP">
                            <option value="Admin">Admin</option>
                            <option value="Asesor">Asesor</option>
                            
                    </select> 
                    <b>Usuario</b><input  required type="text" class="form-control" id="usuarioActP" name="usuarioPActP">
                    <b>Contraseña</b><input required type="text" class="form-control" id="passwordActP" name="passwordActP">
                
                    <button class="btn btn-primary w-100" id="btn_actualiperfil" >Actualizar</button>  
                    <div class="btn btn-info w-100 mt-2" id="btn_cancelar">Cancelar</div> 
                    
                    
                </form>    
            </div>
        </div>        
        </center> 
    </div>
</div>
