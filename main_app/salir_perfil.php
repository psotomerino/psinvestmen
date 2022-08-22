<?php
    
    session_start();
    $_SESSION=[];
    session_destroy();
    //echo ('su session ha finalizado');
    header('location: https://www.psinvestmen.com/login/login.php');
    

?>
<!--<div>
    <p>Ha finalizado su session con exito</p>
    <a href="../index.html"><p class="btn btn-secondary ">IR A INICIO</p></a> 
</div>-->