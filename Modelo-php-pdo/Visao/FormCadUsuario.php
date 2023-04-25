<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        
            <h1>Formulario de cadastro de Alunos</h1>
        <div class="col-md-4 mb-3">
            <hr>
        </div>
		<div class="col-md-4 mb-3" >
        <form method="post" action="./Controle/ControleUsuario.php?ACAO=cadastrarUsuario" >
				<br>
				
                Nome:<input class="form-control" type="text" name="nome" maxlength="40" placeholder="Digite seu nome" />
                <br>
				
				
                <br>Email:<input class="form-control" type="email" id="email" name="email" maxlength="40" placeholder="Digite seu email"/>
                <br>
				
                <button class="btn btn-primary" type="submit" value="Registrar">Registrar</button> 
				<button class="btn btn-primary" type="reset" value="Limpar">Limpar</button>
            </div>
        </form>
    </body>
</html>
