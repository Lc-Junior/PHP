<?php
class PesoIdeal{
  var $pesoideal;

    public function calculo($altura, $genero){
      if($genero == "feminino"){
	      $this->pesoideal	= (62.1*$altura)-44.7;
	      echo "O seu peso ideal é: $this->pesoideal Kg.";
	  }
      if($genero == "masculino"){
        $this->pesoideal	= (72.7*$altura)-58;
        echo "O seu peso ideal é: $this->pesoideal Kg.";
  }
  }

}
?>