<?php

class Salario{
    var $salario;
    var $desconto;

    public function recebe($frase){
        $this->salario = $frase;
    }
    public function calculo($frase){
        if($frase < "1500"){
            $this->desconto = $frase-($frase*0.05);
        }
        if($frase >= "1500"){
            $this->desconto = $frase-($frase*0.11);
        }
    echo "O seu salário com desconto fica por: $this->desconto";
    }
    

}


?>