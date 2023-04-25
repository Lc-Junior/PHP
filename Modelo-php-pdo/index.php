<?php
    $msg =@$_GET['MSG'];
    if($msg != null || $msg != ''){
        echo "<script>alert('$msg')</script>";
    }
    
    echo "</div>";
    ?>
    <html>
        <head>
            <title></title>
        </head>
        <body>
           
                    <h1 align="center">Sistema de Cadastro de usuarios </h1>
          
                    <?php 
                   
                    include 'Visao/FormCadUsuario.php';
					include 'Visao/ListarUsuario.php';
                    ?>
                               
                    
                       
                
    </body>
</html>
