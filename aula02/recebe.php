<?php
    $valor=$_POST['v'];

    for($cont = 1; $cont < $valor; $cont++){
        if($cont % 2 == 0){
            echo "<br><span style='color:orange'>valor digitado par $cont</span>";
        }
        if($cont % 2 == 1){
            echo "<br><span style='color:red'>valor digitado impar $cont</span>";
        }
    }
?>