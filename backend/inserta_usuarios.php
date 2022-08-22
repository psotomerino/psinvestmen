<?php
    $cedula =$_POST['cedula'];
    $nombre =$_POST['nombre'];
    $apellido =$_POST['apellido'];
    $fecha_nac =$_POST['fecha_nac'];
    $sexo =$_POST['sexo'];
    $fono =$_POST['fono_contacto_1'];
    $mail =$_POST['mail'];
    $foto =$_FILES['foto_in']['name']; 
    $status =$_POST['status_'];
    
    $carpeta_destino = 'img_usu/'.$_FILES['foto_in']['name'];

    if (isset($_FILES['foto_in'])) {	
    move_uploaded_file($_FILES['foto_in']['tmp_name'],$carpeta_destino);    
    } 
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
    
    $consulta = "INSERT INTO usuarios_ps(
                Cedula,
                Apellidos,
                Nombres,
                Fecha_Naci,
                Sexo,
                Contacto,
                Mail,
                foto_in,
                Status                             
                )VALUES(?,?,?,?,?,?,?,?,?)";

    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sssssssss",
                        $cedula,
                        $apellido,
                        $nombre, 
                        $fecha_nac,
                        $sexo,
                        $fono,
                        $mail,
                        $foto,         
                        $status                        
                        );
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";
     }else{
        echo "registro correcto vericar en la lista de usuarios";
     }
    mysqli_stmt_close($resu);

?>