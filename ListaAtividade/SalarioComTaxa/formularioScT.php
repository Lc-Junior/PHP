<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
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

    </div>
<div class="formuca-2">

</div>
<div class="alert alert-warning" role="alert">
    <?php
  $obj = new SalarioSS;
  $obj->calculo($n1, $n2);
  ?>
  </div>

</div>

</body>

</html>