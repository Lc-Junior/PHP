<?php
set_time_limit(500); // 

class Radiacao{
    var $massa;
    var $meiavida;
    var $tempo = 0;

    var $loop;

    public function recebe($frase){
        $this->massa = $frase;
    }
    public function calculo($frase){
        for(; ; ){
            if($frase <= 0.10){
                break;
            }
            $this->meiavida = $frase*0.75;
            $this->tempo++;
        }
        $this->tempo*30;
    echo "A massa final $this->meiavida irá levar $this->tempo segundos para ser menor que 0.10";
    }
    

}


?>