<?php
class Excesso{
  var $excesso, $multa;
  public function calculorf($peso){
    if($peso <= "25"){
      echo "O peso das suas mercadorias não excedeu 25Kgs.<br>";
      echo "Então não será necessário pagar nenhuma multa.<br>";
	  }
    elseif($peso > "25"){
      $this->excesso = $peso - 25;
      $this->multa = ($this->excesso*5);
      echo "Sua mercadoria tem um excesso de: $this->excesso Quilos.<br>";
      echo "Logo, você terá que pagar uma multa de: R$ $this->multa Reais.";
    }
  }
}
?>
