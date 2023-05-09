<?php
session_start();

require_once '../Modelo/ClassUsuario.php';
require_once '../Modelo/DAO/ClassUsuarioDAO.php';
require_once '../Modelo/AlertaMensagemJS.php';

$email = @$_POST['email'];
$senha = @$_POST['senha'];

$loginUsuario = new ClassUsuario();
$loginUsuario->setEmail($email);


$classUsuarioDAO = new ClassUsuarioDAO();
$login = $classUsuarioDAO->login($loginUsuario);
// Verificar se a consulta retornou os dados do usuário
if (($login == true) or (!empty($login))) {
    // Verificar se a senha informada é igual a senha registrada no banco
    if(password_verify($senha, $login['senha'])){
        // Usando o password_verify para comparar as senhas
        $_SESSION['usuarioLogado'] = true;
        $_SESSION['idUsuarioLogado'] = $login['id'];
        $_SESSION['nome'] = $login['nome'];
        $_SESSION['email'] = $login['email'];
        $_SESSION['imagem'] = $login['imagem'];

        $alerta = new AlertaMensagemJS();
        $_SESSION['msg'] = $alerta->alertaJavaScript("Login realizado com sucesso!", "success");
        header('Location:../Home.php');
    } else {
        $alerta = new AlertaMensagemJS();
        $_SESSION['msg'] = $alerta->alertaJavaScript("Senha incorreta!", "danger");
        header('Location:../index.php');
    }
} else {
    $alerta = new AlertaMensagemJS();
    $_SESSION['msg'] = $alerta->alertaJavaScript("Email incorreto!", "danger");
    header('Location:../index.php');
}