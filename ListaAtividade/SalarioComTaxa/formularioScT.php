<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/money.png" type="image/x-icon">
    <link rel="stylesheet" href="formularioScT.css">
    <title>Salário Com Taxas</title>
  </head>

  <body>
    <div class="container">
          <div class="formuca">
              <h1>Calculadora de Salário</h1>
        <p>Vamos calcular o seu salário e as taxas cobradas!</p>

    <?php
   require('calculadoraScT.class.php');
   $n1= @$_POST['ganho'];
   $n2= @$_POST['horas'];
   ?>
   <form id="form1" name="form1" method="post" action="">
          Quanto ganha por hora: <br><input type="text" name="ganho" id="txtfrase" placeholder="Digite o valor aqui..."><br>
          Quantas horas trabalha por mês: <br>(Horas p/ semana * 4)<br><input type="text" name="horas" id="txtfrase" placeholder="Digite as horas aqui..."><br>
          <input type="submit" name="button" id="button" value="Enviar">
    </form> 

    </div>

<div class="alert alert-warning" role="alert">
    <?php
  $obj = new SalarioScT;
  $obj->calculo($n1, $n2);
  ?>
  </div>

</div>

</body>

</html>
