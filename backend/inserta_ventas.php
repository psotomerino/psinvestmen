<?php
    
    
    $id_usuarioP=$_POST['Id_usuariospP'];
    $num_boleto=$_POST['num_bol'];
    $detalle =$_POST['detalle_v']; 
    
    
    require ("mi_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);
	if(mysqli_connect_errno()){
	       echo "Fallo al conectar con la BBDD";
           exit();
		};
	mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion, "utf8");
   //echo $detalle;

    $consulta = "INSERT INTO `venta_tiketes`(
                id_usuariosps,
                num_boleto,
                registro             
                )VALUES(?,?,?)";
    $resu =mysqli_prepare($conexion, $consulta);
    $ok = mysqli_stmt_bind_param($resu,"sss",
                        $id_usuarioP,
                        $num_boleto,
                        $detalle          
                        );
    
    $ok = mysqli_stmt_execute($resu);
   
     if($ok = false){
        echo "error en la consulta";        
     }else{
        echo "registro correcto vericar en la lista de usuarios";        
     }
    mysqli_stmt_close($resu);

 
    



    
?>