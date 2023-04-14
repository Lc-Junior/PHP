<?php
class SalarioSS{
  var $salario;
  var $n1;
  var $n2;
    public function calculo($n1, $n2){
	$this->salario	= $n1*$n2;
	echo "O salário é: R$ $this->salario Reais.";
	}
   }
?>