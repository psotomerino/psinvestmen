<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: https://www.psinvestmen.com/');
        exit();
    }

    include '../../templates/cortina.php'; 
    include '../../templates/estructura.html';
    include '../../templates/footer.html'; 
    

    

?>
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="../../css/para_indexAdmin.css">
<script src="../../js/para_indexAdminMenu.js" defer></script>
<style>
    .formulario_reg{
        margin-top: 20px;
        color:black;
    }
    .contenedor_dash{
        width: 18%;
        float: left;
    }
    #menu_1{
        display: inline;
    }
    .contenedor_2{
        width: 80%;
        margin-left: 20px;
        align-content: center;
    }
    
    .contenedor_crud{
        
        color: black;
        font-size: 15px;
        
        
    }
    #cont_crud{
        width: 78%;
    }
    #num_tik{
        margin-top: 60px;
        background-color: yellowgreen;
        padding: 3px;
        text-align: center;
        font-size: 30px;
    }
    #total_tic{
        font-size: 12px;
        color:black;
        text-align: center;
    }
    

</style>
<div class="contenedor">
    <div class="row">
       <div class="col-12">
        <?php include '../menu_superior.php'; ?>   
       </div>
    </div>
</div>
<div class="contenedor_dash "> 
    <div class="menu-dashboard">
    <!--   TOP MENU-->
        <div class="top-menu">
           <div class="logo">
               <img src="../../imagenes/logo_1-02.png" alt="" class="img_1" >
               <span>Investment</span>
           </div>
           <div class="toggle">
                <i class='bx bx-menu'></i> 
           </div><br>
    <!--MENU-->
           <div class="menu" >
              <div class="enlace" id="btn_miperfil">
                <i class="bx bx-grid-alt"></i>
                <span>Mi Perfil</span>  
              </div>
              <div class="enlace" id="btn_listarU">
                <i class="bx bx-user"></i>
                <span>Usuarios</span>  
              </div>
              <div class="enlace" id="btn_registroU">
                <i class='bx bx-user-plus'></i>
                <span>Nuevo</span>  
              </div>
              <!--<div class="enlace">
                <i class='bx bxs-key'></i>
                <span>Perfiles</span>  
              </div>
              <div class="enlace" id="btn_salir">
                <i class='bx bxs-log-out'></i>
                <span>Salir</span>
              </div>-->   
           </div>
            <div id="num_tik">5 <br><p id="total_tic">Tickets</p></div>
        </div>
    </div>
</div> 
<?php 
    include 'form_perfiles.php';
    include 'form_actperfil.php';
?> 
<div class="contenedor_crud">
    <div class="row g-0 " id="cont_crud">
       <div class="col-12">
            <table id="" class="table table-bordered table-hover table-striped">
       <thead class="thead-light">
           <tr>
               <th>Ord</th>
               <th>Nombres</th>
               <th>Apellidos</th>
               <th>Contacto</th>
               <th>Perfil</th>
               <th>Status</th>
               <th >Acciones</th>
           </tr>
         
       </thead>
       <tbody id="listados_usuR"></tbody>
       
    </table>    
        </div>
    </div>
    
</div>
<div class="contenedor_nuevoU">
    <div class="row">        
    <div class="col-8">
        <div class ="formulario_reg" >
             <form role="form" id="formulario_new_reg" enctype="multipart/form-data">
                 <div class="form-group">
                          <label for="cedula">Número de Cédula / Pasaporte</label>
                            <input required type="text" class="form-control" id="cedula" name="cedula">
                          </div>
                          <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input required type="text" class="form-control" id="nombre" name="nombre">
                          </div>
                          <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input required type="text" class="form-control" id="apellido" name="apellido">
                          </div>
                          <div class="form-group">
                            <label for="fecha_nac">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
                          </div>
                          <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select  class="form-control" id="sexo" required name="sexo">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                            </select> 
                          </div>
                          <div class="form-group">
                            <label for="fono_contacto_1">Número de contacto</label>
                            <input  required type="text" class="form-control" id="fono_contacto_1" name="fono_contacto_1">
                          </div>
                          <div class="form-group">
                            <label for="mail">Correo Electronico</label>
                            <input required type="text" class="form-control" id="mail" name="mail">
                          </div>
<!--                          <div class="form-group">
                            <label for="tipo_plan">Tipo de plan</label>
                            <select  class="form-control" id="tipo_plan" required name="tipo_plan">
                                            <option value="1_ano">Inversión a 1 año</option>
                                            <option value="3_ano">Inversión a 3 años</option>
                                            <option value="5_ano">Inversión a 5 años</option>
                                            <option value="p_corto">Plan corto</option>

                            </select> 
                          </div> -->
                          <div class="form-group">
                                <label for="foto_in">Tomar fotografia</label>
                                <input type="file" class="form-control" name="foto_in" id="foto_in">
                           </div>
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select  class="form-control" id="status" required name="status_">
                                            <option value="activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>                                           

                            </select> 
                          </div>    
                          <p class="btn btn-success  mt-4" id="btn_regNuevo">Registrar</p> 
                    </form>
            </div>
        </div>  
    </div>
</div>

<div class="contenedor_editU">
    <div class="row">        
    <div class="col-8">
        <div class ="formulario_reg" >
             <form role="form" id="formulario_edit_reg" enctype="multipart/form-data">
                 <div class="form-group">
                          <input type="hidden" class="form-control" id="Id_usuariopsE" name="Id_usuariopsE"> 
                          <label for="cedula">Número de Cédula / Pasaporte</label>
                            <input required type="text" class="form-control" id="cedulaE" name="cedulaE">
                          </div>
                          <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input required type="text" class="form-control" id="nombreE" name="nombreE">
                          </div>
                          <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input required type="text" class="form-control" id="apellidoE" name="apellidoE">
                          </div>
                          <div class="form-group">
                            <label for="fecha_nac">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacE" name="fecha_nacE">
                          </div>
                          <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select  class="form-control" id="sexoE" required name="sexoE">
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                            </select> 
                          </div>
                          <div class="form-group">
                            <label for="fono_contacto_1">Número de contacto</label>
                            <input  required type="text" class="form-control" id="fono_contacto_1E" name="fono_contacto_1E">
                          </div>
                          <div class="form-group">
                            <label for="mail">Correo Electronico</label>
                            <input required type="text" class="form-control" id="mailE" name="mailE">
                          </div>
<!--                          <div class="form-group">
                            <label for="tipo_plan">Tipo de plan</label>
                            <select  class="form-control" id="tipo_planE" required name="tipo_planE">
                                            <option value=""></option>
                                            <option value="1_ano">Inversión a 1 año</option>
                                            <option value="3_ano">Inversión a 3 años</option>
                                            <option value="5_ano">Inversión a 5 años</option>
                                            <option value="p_corto">Plan corto</option>

                            </select> 
                          </div> -->
                          <div class="form-group">
                                <label for="foto_in">Tomar fotografia</label>
                                <input type="file" class="form-control" name="foto_in_E" id="foto_in_E">
                           </div>
                          <div class="form-group">
                            <label for="status">Status</label>
                            <select  class="form-control" id="status_E" required name="status_E">
                                            <option value=""></option>
                                            <option value="activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>                                           

                            </select> 
                          </div>    
                          <p class="btn btn-warning  mt-4" id="btn_editaU">ACTUALIZAR</p> 
                    </form>
            </div>
        </div>  
    </div>
</div>

<script src="../../js/para_crudusuario.js"></script>
<?php


    
?>

