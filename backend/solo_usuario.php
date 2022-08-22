<?php
require_once 'conexion.php';

function get_solo_usuario(){
    
    $mysqli = getConn();
    
    $id_usu = $_POST['id_envio'];
    
    
    $query ="SELECT 
    usuarios_ps.Id_usuariops, 
    usuarios_ps.Cedula, 
    usuarios_ps.Nombres, 
    usuarios_ps.Apellidos, 
    usuarios_ps.Contacto, 
    usuarios_ps.Fecha_Naci, 
    usuarios_ps.Sexo, 
    usuarios_ps.Mail,
    usuarios_ps.Status, 
    login_ps.Tipo_usuario 
    FROM usuarios_ps LEFT JOIN login_ps on usuarios_ps.Id_usuariops = login_ps.Id_usuariops where usuarios_ps.Id_usuariops = $id_usu";
        
    $resultado = mysqli_query($mysqli,$query);
    
    $json = array();
    while ($fila =  mysqli_fetch_array($resultado)){
        $json[]=array (
          'Id_usuariops'=> $fila['Id_usuariops'],    
          'Cedula' => $fila['Cedula'],       
          'Apellido' => $fila['Nombres'],
          'Nombre'=> $fila['Apellidos'],
          'Fecha_Naci'=> $fila['Fecha_Naci'],
          'Sexo' => $fila['Sexo'],
          'Contacto' => $fila['Contacto'],
          'Mail' => $fila['Mail'],
          'Status' => $fila['Status'],
          'Perfil' => $fila['Tipo_usuario']
              
        );
    }
    $jsonstring = json_encode($json[0]);   
    return $jsonstring;
}
echo get_solo_usuario();