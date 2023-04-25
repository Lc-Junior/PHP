<?php

require_once 'Conexao.php';
class ClassUsuarioDAO {

    // Cadastrar usuário
    public function cadastrar(ClassUsuario $cadastrarUsuario) {
        try {
            $pdo = Conexao::getInstance(); // Instanciando o objeto a partir da classe conexão
            $sql = "INSERT INTO usuarios (nome, email, matricula, telefone, senha, created) values (?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $cadastrarUsuario->getNome());
            $stmt->bindValue(2, $cadastrarUsuario->getEmail());
            $stmt->bindValue(3, $cadastrarUsuario->getMatricula());
            $stmt->bindValue(4, $cadastrarUsuario->getTelefone());
            $stmt->bindValue(5, $cadastrarUsuario->getSenha());
            $stmt->bindValue(6, $cadastrarUsuario->getCreated());
           
            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}

?>