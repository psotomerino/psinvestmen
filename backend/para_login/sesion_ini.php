<?php
    if(!empty ($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
        
        require "conexion.php"; 
        sleep (1);
        session_start();
        $mysqli->set_charset('utf8');       
        
        $usuario = $mysqli->real_escape_string($_POST['usuariolg']);
        $pass = $mysqli->real_escape_string($_POST['passlg']);
        
        if($nueva_con = $mysqli->prepare("SELECT Id_usuariops, Tipo_usuario from login_ps WHERE nick =? AND password =?")){
            $nueva_con->bind_param('ss', $usuario, $pass);
            $nueva_con->execute();
            $resultado = $nueva_con->get_result(); 
            //echo ("vamos ok...");
            if($resultado->num_rows == 1){
                $datos = $resultado->fetch_assoc();
                $_SESSION['usuario']= $datos;
                echo json_encode(array('error' => false, 'tipo' => $datos['Tipo_usuario'], 'id_usuario' =>$datos['Id_usuariops']));
                
            }else{
                echo json_encode(array('error' => true));
            }
            $nueva_con->close();
        }
        
    }
?>