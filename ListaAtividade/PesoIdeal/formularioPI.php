<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="formularioPI.css">
    <title>Peso Ideal</title>
  </head>

  <body>
      <div class="container">
          <div class="formuca">
              <h1>Calculadora de Peso Ideal</h1>
        <p>Vamos calcular o seu Peso Ideal de acordo com sua altura.</p><br>

    <?php
   require('calculadoraPI.class.php');
   $altura= @$_POST['altura'];
   $genero= @$_POST['genero'];
   ?>

    <form id="form1" name="form1" method="post" action="">
          Sexo: <br>
          <input type="radio" name="genero" id="feminino" value="feminino" required>Feminino<br>
          <input type="radio" name="genero" id="masculino" value="masculino" required>Masculino<br><br>
          Qual a sua altura:<br>(Em metros. Ex: 1.70m)<br>
          (Utilize ponto ".")<br><input type="text" name="altura" id="txtfrase" placeholder="Digite sua altura aqui..."><br>
          <input type="submit" name="button" id="button" value="Enviar">
          <div class="alert alert-warning" role="alert">
            <?php
                $obj = new PesoIdeal;
                $obj->calculo($altura, $genero);
            ?>
        </div>

</form>
    </div>
</div>

</body>

</html>