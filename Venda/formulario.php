<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Vendas</title>
    <style>

    </style>
</head>
<body>
    <form action="resultadovenda.php" method="post">
    <h1>Página de vendas</h1>
    Digite o valor da sua venda:
    <input type="text" name="venda"><br><br>
    Escolha quantas parcelas irá querer: <br>
    <button type="submit" class="btn btn-primary" name="acao" value="vista">À Vista</button>
    <button type="submit" class="btn btn-primary" name="acao" value="2x">Duas Vezes</button>
    <button type="submit" class="btn btn-primary" name="acao" value="3x">Três Vezes</button>



    </form>
</body>
</html>