<?php
require_once 'conexion.php';

function get_usuarios(){
    $mysqli = getConn();
    $query ="SELECT 
        usuarios_ps.Id_usuariops, 
        usuarios_ps.Nombres, 
        usuarios_ps.Apellidos, 
        usuarios_ps.Contacto, 
        usuarios_ps.Mail, 
        usuarios_ps.Status, 
        login_ps.Tipo_usuario 
        FROM usuarios_ps LEFT JOIN login_ps on usuarios_ps.Id_usuariops = login_ps.Id_usuariops";
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'id_usuario' =>$fila['Id_usuariops'],    
          'Nombre' => $fila['Nombres'],
          'Apellido'=> $fila['Apellidos'],
          'Contacto'=> $fila['Contacto'],
          'Mail' => $fila['Mail'],  
          'Perfil' => $fila['Tipo_usuario'],  
          'status' => $fila['Status']
        );
    }
    $jsonstring = json_encode($json);   
    return $jsonstring;
}
echo get_usuarios();
