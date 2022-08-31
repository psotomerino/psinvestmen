<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        header('location: https://www.psinvestmen.com/');
        exit();
    }

    //include '../templates/cortina.php';
    include '../templates/estructura.html';
    include '../templates/footer.html';
    

?>
<link rel="stylesheet" href="css/estilo_index.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap"rel="stylesheet">
<body>
    <div class="container">
        <div class="user-image">
            <img src="../imagenes/Elizabeth_paredes.jpeg" alt="this image contains user-image">
        </div>
 
        <div class="content">
            <h3 class="name">Elizabeth Paredes</h3>
            <p class="username">@asesor_comercial</p> 
            <div class="links">
                <a class="facebook" href="https://www.facebook.com/" target="_blank" title="">
                    <i class="fab fa-facebook"></i>
                </a> 
                <!-- <a class="git" href= "https://github.com/topics/geeksforgeeks" title="GFG_github" target="_blank">
                    <i class="fab fa-github-square"></i>
                </a> 
                <a class="linkedin" href= "https://www.geeksforgeeks.org/tag/linkedin/" title="GFG_linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>                  -->
                <a class="insta" href="https://www.instagram.com/" target="_blank" title="">
                    <i class="fab fa-instagram-square"></i>
                </a>
            </div> 
            <p class="details">
                P&S Group Investment
            </p> 
            <a class="effect effect-4" href="index_01.php">
                INCIAR 
            </a>
        </div>
    </div>
     
    <!-- This is link of adding small images
         which are used in the link section  -->
    <script src="https://kit.fontawesome.com/704ff50790.js"
        crossorigin="anonymous">
    </script>
</body>
 
</html>