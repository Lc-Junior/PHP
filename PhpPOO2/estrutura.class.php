<?php
class Mensagem{
  var $variavel;
     public function receber($frase){  // método receber os dados
	$this->variavel	= $frase;
	}
     public function imprimir(){// método imprimir dados
	echo "A  variavel é: $this->variavel";
	}
   }
?>
