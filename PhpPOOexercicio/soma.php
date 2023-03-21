<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Soma!</title>
  </head>
  <body>
    <h1>Olá, vamos fazer uma soma!</h1>


<?php
   require('calculo.class.php');//referenciando o arquivo 
   $var1= $_POST['n1'];
   $var2= $_POST['n2'];
   ?>
  <form id="form1" name="form1" method="post" action="">
    <table width="843" border="0"><tr>
      Numero 1: <input type="text" name="n1" id="n1" /></td><br>
      Numero 2: <input type="text" name="n2" id="n2" /></td>
      <td><input type="submit" name="button" id="button" value="Enviar" /></td>
      <td>&nbsp;</td></tr>
  </table>
</form> 
<div class="alert alert-success" role="alert">
<?php
  $obj = new Mensagem; //instanciando o objeto
  $obj->calculo($var1, $var2); // usando o metodo
  ?>
  </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>