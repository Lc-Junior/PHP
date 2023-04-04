<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="104877439.jpg" type="image/x-icon">
    <link rel="stylesheet" href="formuca.css">
    <title>Formulario</title>
  </head>
  <body>
      <div class="container">

          <h1>Olá, humano</h1>
          <div class="formuca">
        <p>Vamos calcular o desconto do INSS para você, de acordo com o seu salário!</p>
        <p>Para salários até R$1.500,00 você terá 5% de desconto.</p>
    <p>Para salários acima ou igual à R$1.500,00 você terá 11% de desconto.</p>
    <?php
   require('salario.class.php');//referenciando o arquivo 
   $fr= @$_POST['txtfrase'];
   ?>
  <form id="form1" name="form1" method="post" action="">
          Salário: <br><input type="text" name="txtfrase" id="txtfrase" placeholder="Digite seu salario..."><br>
          <input type="submit" name="button" id="button" value="Enviar">
    </form> 
</div>
<div class="alert alert-warning" role="alert">
    <?php
  $obj = new Salario; //instanciando o 
  $obj->recebe($fr); // usando o metodo para enviar a mensagem
  $obj->calculo($fr); // usando o metodo
  ?>
  </div>
  
  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</div>
</body>
</html>
