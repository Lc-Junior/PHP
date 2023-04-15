<?php
class SalarioScT{
  var $salario, $inss, $ir, $sindicato, $sl;
  var $n1;
  var $n2;
    public function calculo($n1, $n2){
	$this->salario	= $n1*$n2;
	echo "O salário bruto é: R$ $this->salario Reais.";
    echo "Agora iremos descontar as taxas!</br>";
    
    $this->ir = $this->salario*0.11;
    $this->inss = $this->salario*0.08;
    $this->sindicato = $this->salario*0.05;
    
	echo "O valor pago ao Imposto de Renda é: R$ $this->ir Reais.<br>";
	echo "O valor pago ao INSS é: R$ $this->inss Reais.<br>";
	echo "O valor pago ao Sindicato é: R$ $this->sindicato Reais.<br>";
    
    $this->sl = $this->salario-($this->ir+$this->inss+$this->sindicato);
    
    echo "Agora o seu salário líquido seria de: R$ $this->sl Reais!";
	}

   }
?>
