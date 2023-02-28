<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Aula03</title>
</head>
<body>
    <form action="resultado.php" method="post">
    <h1>Uma página legal de calculadora</h1>
    <center>Calculadora</center>
    <center>
        <table border =1 align = center>
            Número 1: <input type="text" name="n1"> <br><br>
            Número 2: <input type="text" name="n2"> <br>
    </center>
    <br><br>
    <button type="submit" class="btn btn-primary" name="acao" value="somar">SOMAR</button>
    <button type="submit" class="btn btn-primary" name="acao" value="subtrair">Subtrair</button>
    <button type="submit" class="btn btn-primary" name="acao" value="multiplicar">Multiplicar</button>
    <button type="submit" class="btn btn-primary" name="acao" value="dividir">Dividir</button>
</form>
<!--    
        <div class="form">
            <label for="inputEmail">Endereço de E-mail</label>
            <input type="email" class="formemail" id="inputEmail" placeholder="Digite seu e-mail aqui">
        </div>
        <div class="form">
            <label for="inputSenha">Crie sua senha</label>
            <input type="password" id="inputSenha" placeholder="Digite sua senha">
        </div>
        <div class="form checkbox">
            <input type="checkbox" id="checkboxpassword">
            <label for="checkboxpassword">Lembrar senha.</label>

        </div>
    Valores: <input type="text" name="numbers" size="3">
    <input type="submit" value="Enviar">
-->

    </form>
</body>
</html>