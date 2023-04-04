<?php
set_time_limit(500); // 

class Radiacao {
    private $massa;
 
    public function recebe($massa) {
       $this->massa = $massa;
    }
 
    public function calculo() {
       $tempo = 0;
       while ($this->massa > 0.10) {
          $this->massa *= 0.75; //perda de 25% da massa
          $tempo += 30; //30 segundos
       }
       echo "Tempo necessário para a massa ser menor que 0.10: " . $tempo . " segundos";
    }
 }
 
?>
