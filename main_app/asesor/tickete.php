<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: https://www.psinvestmen.com/');
        exit();
    }

?>
<style>
    .tikete{
        width: 99%;
        text-align: center;
    }
    a{
        text-decoration: none;
    }
    .titulo{
        color:black;
    }
    #form_venta{
        width: 40%;
        text-align: center;
    }
    @media screen and (max-width: 900px){
    
    #form_venta{
        width: 90%;
        text-align: center;
        } 
    }


</style>
<div class="tikete">
    <div>
    <h3 class="titulo">REGISTRO DE VENTA</h3>  
        <div id="para_form">
            <center>
            <form action="" id="form_venta" class="mt-2">
                        <input type="hidden" class="form-control" id="Id_usuariospP" name="Id_usuariospP">   
                        <b class="titulo">Número de boleto</b><input  required type="text" class="form-control" id="num_bol" name="num_bol">  
                        <b class="titulo">Detalle (email asignado en la venta)</b><input  required type="text" class="form-control" id="detalle_v" name="detalle_v"> 
                        <div class="btn btn-warning w-100 mt-2" id="btn_registrar_v"><a href="">Continuar</div> 
                        
            </form>
            </center>
        </div> 
    </div>    
    <a href="#"><p id="volver">volver al inicio</p></a>
</div>
<script src="../../js/para_tikete.js"></script>