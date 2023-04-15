<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/pc.png" type="image/x-icon">
    <link rel="stylesheet" href="formularioQE.css">
    <title>Imposto Receita Federal</title>
  </head>

  <body>
      <div class="container">
          <div class="formuca">
              <h1>Calculadora de Imposto da Receita Federal</h1>
        <p>O peso estabelecido pela Receita Federal é de 25Kg.</p><br>
        <p>Acima de cada quilo excedente será cobrado uma taxa de 5,00 Reais!</p><br>
        <p>Informe abaixo o peso total de suas mercadorias.</p>

    <?php
   require('calculadoraQE.class.php');
   $peso= @$_POST['peso'];
   ?>

    <form id="form1" name="form1" method="post" action="">
           <input type="text" name="peso" id="txtfrase" placeholder="Digite o peso aqui."><br>
          <input type="submit" name="button" id="button" value="Enviar">


          <div class="alert alert-warning" role="alert">
            <?php
                $obj = new Excesso;
                $obj->calculorf($peso);
            ?>
        </div>

</form>
    </div>
</div>

</body>

</html>
