<?php
require_once 'conexion.php';

function get_cuenta_ticket(){
    $mysqli = getConn();
    $query ="SELECT COUNT(*) AS TOTAL FROM `venta_tiketes`";
    $resultado = mysqli_query($mysqli,$query);
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'boleto' =>$fila['TOTAL']
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_cuenta_ticket();
