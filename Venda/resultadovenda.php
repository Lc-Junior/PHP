<?php
function vendas($venda, $acao){
    if($acao =="vista"){
        $resultado=$venda-($venda*0.05);
        echo "<center> A Venda á vista fica por $resultado </center>";
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }
    if($acao =="2x"){
        $resultado=$venda+($venda*0.05);
        echo "<center> A Venda parcelada em 2 vezes fica por $resultado </center>";
        echo "<center>Parcela 1: </center>", $resultado/2;
        echo "<center>Parcela 2: </center>", $resultado/2;
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }
    if($acao =="3x"){
        $resultado=$venda+($venda*0.1);
        echo "<center>A Venda parcelada em 3 vezes fica por $resultado </center>";
        echo "<center>Parcela 1: </center>", $resultado/3;
        echo "<center>Parcela 2: </center>", $resultado/3;
        echo "<center>Parcela 3: </center>", $resultado/3;
        echo "<center><a href='formulario.php'>Voltar</a></center>";
    }

}

vendas($_POST["venda"], $_POST["acao"]);

?>