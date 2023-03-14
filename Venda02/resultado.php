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

<?php

function vendas($venda, $parcela){
    static $maiorvenda;
    static $total;
    static $somadesconto;
    if($parcela == 1){
        $resultado=$venda-($venda*0.1);
        echo "A Venda á vista fica por: ". $resultado." Reais.</br>";
    }
    if($parcela > 1 && $parcela <= 3){
        $resultado=$venda+($venda*0.05);
        echo " A Venda parcelada em $parcela vezes, sai por $parcela parcelas de ". ($resultado/$parcela). " Reais.</br>";
    }
    if($parcela >= 4){
        $resultado=$venda+($venda*0.1);
        echo " A Venda parcelada em $parcela vezes, sai por $parcela parcelas de ". ($resultado/$parcela). " Reais.</br>";   
    }
    $total+=$venda;

    if($venda > $maiorvenda){
        $maiorvenda = $venda;
    }
    $somadesconto += $venda*0.1;
    
echo "O total vendido foi: " . $total." R$.</br>";
echo "A maior venda foi: ". $maiorvenda." R$.</br>";
echo "Soma dos descontos: " . $somadesconto." R$.</br>";
echo "<a href='formulario.php'>Voltar</a>";

}
vendas($_POST["venda"], $_POST["parcela"]);

?>
