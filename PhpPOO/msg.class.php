<?php 
  class Mensagem{
   var $msg; //atributo
   function metodo_rcb_msg(){ // metodo
   $this->msg="Bom dia meus amigos!";// O $this  faz o compartilhamento da variavel
   echo "$this->msg";// acessando e imprimindo o conteudo da variavel
    }
  }
?>
