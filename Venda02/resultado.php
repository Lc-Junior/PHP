<?php

$resultado=0;
$parcela=$_POST['parcela'];
$venda =$_POST['venda'];
$totalvenda = 0;
$maiorvenda = 0;


        if($parcela == "1"){
            $resultado = $venda-($venda*0.1)
        
        }
        else($parcela <= "3"){
            $resultado = $venda+($venda*0.05);

            return $resultado;
        }
        else($parcela >= "4"){
            $resultado = $venda+($venda*0.1);

            return $resultado;
        }
        if($venda > $maiorvenda){
            $maiorvenda = $venda;
        }

        $totalvenda += $venda;
        echo "Total vendido: ". $totalvenda;
        echo "A maior venda foi: ". $maiorvenda;
        echo "A soma de todos os descontos foi de: " ;

?>