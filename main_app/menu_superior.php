<?php 
    include '../templates/estructura.html';
    include '../templates/footer.html';
    include '../../global/conexion.php';

    session_start();    
    $id_usuario =$_SESSION['usuario']['Id_usuariops'];
    //echo $id_usuario; 

    $sql = "SELECT * FROM `login_ps` INNER JOIN usuarios_ps on login_ps.Id_usuariops = usuarios_ps.Id_usuariops WHERE login_ps.Id_usuariops = $id_usuario";

    if ($resultado = mysqli_query($conexion,$sql)) {

    /* obtener array asociativo */
    while ($row = mysqli_fetch_assoc($resultado)) {
        $id_usuariops =$row["Id_usuariops"];
        $nombres = $row["Nombres"];
        $apellidos = $row["Apellidos"];
        $perfil = $row["Tipo_usuario"];
    }

    /* liberar el conjunto de resultados */
    //echo $nic;    
    mysqli_free_result($resultado);
}


?>
   <style>
    .menu_A{
        background-color:darkblue;
        height: 50px;
        width: 100%;
    }
    .text{
        color: aliceblue;
    }
       #este_id{
           display: none;
       }   
</style>
<div class="row menu_A">
    <div class="col-8 text"><b>USUARIO:&nbsp  </b> <?php echo $nombres;?>&nbsp <?php  echo $apellidos; ?><br>
<!--        <b>Perfil:&nbsp</b><?php  echo $perfil; ?> --> <b id="este_id"><?php echo $id_usuariops;?></b>
    </div>    
    <div class="col-4" id="btn_superior"><a href="../salir_perfil.php"><p class="btn btn-success">TERMINAR SESSION</p></a> </div>
</div>
