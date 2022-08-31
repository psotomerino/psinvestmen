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
<link rel="stylesheet" href="../../css/para_indexAsesor.css">
<style>
    .formulario_reg{
        margin-top: 20px;
        color:black;
    }
    .contenedor_dash{
        width: 18%;
        float: left;
    }

</style>
<div class="contenedor">
    <div class="row">
       <div class="col-12">
        <?php include '../menu_superior.php'; ?>   
       </div>
    </div>
</div>
<?php include 'tickete.php'?>
<div class="grid-container g-0">
  <div class="grid-item"><p><img src="../../imagenes/perfil_usu.jpg" class="img_" alt=""></p><p>MI PERFIL</p></div>
  <div class="grid-item" id="venta"><p><img src="../../imagenes/casa_icono.png" class="img_" alt=""></p><p>VENTA DE TICKET</p></div>
  <div class="grid-item" id="Reg_venta"><p><img src="../../imagenes/reg_venta.png" class="img_" alt=""></p><p>REGISTRO DE VENTA</p></div>
  <div class=""></div>
  <div class=""></div>
  <div class=""></div>
  <div class=""></div>
  <div class=""></div>

</div>

