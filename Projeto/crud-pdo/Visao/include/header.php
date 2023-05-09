<?php
include("./variaveis.php");
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/bootstrap.css">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/all.css">

    <!-- Personalizado CSS -->
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/home.css">
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/alerta.css">

    <title><?php echo isset($titulo_pagina) ? $titulo_pagina : "Sistema"; ?> - PDO</title>
</head>

<body>

    <div class="container border-bottom">
        <header class="row pt-3">
            <div class="col-md-6">
                <h3 class="text-info text-center text-md-left">APLICAÇÕES WEB</h3>
            </div>
            <div id="Top_usuario" class="col-md-6 d-flex flex-row justify-content-end">
                <img src="<?php 
                     if(isset($_SESSION['imagem']) and !empty($_SESSION['imagem'])){
                         echo URLASSETS . "perfil/perfil_id". $_SESSION['idUsuarioLogado'] . "/" . $_SESSION['imagem'];
                     } else {
                         echo URLASSETS . 'image/perfil.jpg';
                     }
                ?>" class="img-fluid" alt="">
                <p class="d-flex flex-column">
                    <span>Bem vindo(a),</span>
                    <strong><?php echo $_SESSION['nome'] ? $_SESSION['nome'] : "Nome Usuário"; ?></strong>
                </p>
            </div>
        </header>
    </div>