<?php
class Visibilidade{
  protected $protegido =" protegido";
  private   $privado   =" privado";
  public    $publico   =" publico";   
     public function exibir(){ // criando o método e definindo a visibilidade
	echo $this->protegido."</br>";
        echo $this->privado."</br>";
        echo $this->publico."</br>";
	}
   }
 $ver = new Visibilidade; 
 $ver-> exibir();// chamando o metodo exibir que é publico
 echo $ver-> publico;// imprimindo o atributo da classe; 
 ?>
