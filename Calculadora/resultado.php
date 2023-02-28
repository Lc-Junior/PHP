<?php
function calcular($n1, $n2, $acao){
    if($acao =="somar"){
        $resultado=$n1+$n2;
        echo "<center> A soma é $resultado </center>";
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }
    if($acao =="subtrair"){
        $resultado=$n1-$n2;
        echo "<center> A subtração é $resultado </center>";
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }
    if($acao =="multiplicar"){
        $resultado=$n1*$n2;
        echo "<center> A Multiplicação é $resultado </center>";
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }
    if($acao =="divisao"){
        $resultado=$n1/$n2;
        echo "<center> A Divisão é $resultado </center>";
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }

}

calcular($_POST["n1"], $_POST["n2"], $_POST["acao"]);

?>