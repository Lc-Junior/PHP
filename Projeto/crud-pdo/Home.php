<?php
$titulo_pagina = "Home"; // Definindo nome da página

require_once "Controle/ControleListarUsuarios.php";

include("Visao/include/header.php");
include("Visao/include/Menu.php");
include("Visao/include/MensagemDeAlerta.php");

//var_dump($array_usuarios);
?>

<section class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <p>Lista de usuários</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Usuário</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-right">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($array_usuarios as $key => $value){
                    ?>
                    <tr>
                        <td><?php echo $value['nome']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td class="text-right">
                            <button onclick="window.location.href='<?php echo URL . 'Usuario.php?id=' . $value['id']; ?>'" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>
                            <?php 
                                if($value['id'] == $_SESSION['idUsuarioLogado']) {
                                    // Se o usuário a ser listado for o usuário logado, exibir botão editar e excluir
                            ?>
                                <button onclick="window.location.href='EditarPerfil.php?id=<?php echo $_SESSION['idUsuarioLogado']; ?>'" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="window.location.href='ExcluirConta.php'" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            <?php
                                }
                            ?>
                        </td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
include("Visao/include/rodape.php");
?>