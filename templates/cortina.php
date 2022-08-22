<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: https://www.psinvestmen.com/');
        exit();
    }

    include '../../templates/estructura.html';
    include '../../templates/footer.html';
    

?>
<style>
    .capa_0{
       
        background-color: black;
        position: absolute;
        z-index: 4;
        width: 100%;
        height: 500%;
        display: flex;
        justify-content: center;
        margin-bottom: 100px;
        opacity: 90%;
    } 
    #imag_{
        width: 20%;
        margin-top: 150px;
        margin-left: 0px;
        
    }
</style>
<center>
    <div class="capa_0 " >
        <img src="../imagenes/logo_1-02.png" alt="" id="">        
    </div>
</center>   
 
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".capa_0").fadeOut(1500);
    },1500);    
});
</script>