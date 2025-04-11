<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Projeto Bootstrap</title>
  <!-- Link para o CSS do Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<?php

require_once 'Conexao.php';
require_once 'Usuarios.php';

class Crud extends Conexao{
    
    //aqui é a class crud [create, read, update, delete]

    public function novoUsuario(Usuarios $Usuario){

        $conn=$this->conectaDB();

        $stmt =  $conn->prepare("INSERT INTO clientes (userNome, userEmail, userSenha) VALUES (?,?,?)");
         $stmt->bindValue(1,$Usuario->getUserNome());
        $stmt->bindValue(2,$Usuario->getUserEmail());
        $stmt->bindValue(3,$Usuario->getUserSenha());

        $addido = $stmt->execute();

        echo $addido ? "<div class='alert alert-success' role='alert'>Cadastrado com sucesso!</div>":"<div class='alert alert-danger' role='alert'>Algum erro!</div>";
    }


    public function buscarUsuario(Usuarios $Usuario){
        $conn=$this->conectaDB();

        $stmt = $conn->prepare("SELECT * FROM clientes WHERE userEmail = ?");
        $stmt->bindValue(1,$Usuario->getUserEmail());
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarUsuarioId(Usuarios $Usuario){
        $conn=$this->conectaDB();

        $stmt = $conn->prepare("SELECT * FROM clientes WHERE userId = ?");
        $stmt->bindValue(1,$Usuario->getUserId());
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(Usuarios $Usuario){

        $conn = $this->conectaDB();

        $stmt = $conn->prepare("UPDATE clientes SET userNome = ?, userEmail = ?, userSenha = ? WHERE userId = ?");
        $stmt->bindValue(1,$Usuario->getUserNome());
        $stmt->bindValue(2,$Usuario->getUserEmail());
        $stmt->bindValue(3,$Usuario->getUserSenha());
        $stmt->bindValue(4,$Usuario->getUserId());
        $updating = $stmt->execute();

        echo $updating ? "<div class='alert alert-success'>Alterado com sucesso</div>":"<div class='alert alert-success'>Algo errado</div>" ;

    }

    public function deleteUsuario(Usuarios $Usuario){
        $conn = $this->conectaDB();

        $stmt = $conn->prepare("DELETE FROM clientes WHERE userId = ?");
        $stmt->bindValue(1,$Usuario->getUserId());
        $apagado = $stmt->execute();
        
        echo $apagado ? "Usuário excluído. Não é possível refazer":"Erro na tentativa de exclusão";

    }

}

?>

</body>
</html>