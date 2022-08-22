<?php
    $mysqli = new mysqli('localhost','psinvest','Pasm.2022jc)','psinvest_master');
    if($mysqli->connect_errno):
        echo "Error al conectarse con Mysql debido al error: ".$mysqli->connect_errno;
    endif;
    //echo "conexion correcta";
?>