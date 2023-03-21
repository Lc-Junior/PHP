<?php
class Mensagem{
  var $soma;
  var $n1;
  var $n2;
    public function calculo($n1, $n2){
	$this->soma	= $n1 + $n2;
	echo "A Soma é: $this->soma";
	}
   }
?>
