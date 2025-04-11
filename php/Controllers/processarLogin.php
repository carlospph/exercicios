<?php session_start(); ?>

<title>Validando dados</title>

<?php

//menu/header
require_once '../Includes/header.php';

//conexao
require_once '../Classes/conexao.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

  
    $senha = $_POST['senhaDigitada'];
    $userEmail = $_POST['userEmail'];
    // Criptografando a senha com bcrypt
  

    //busca do senha inserido para ver se esta cadastrado (se cadastrado não permite cadastrar)
     
    $buscarLogin= $pdo->prepare("SELECT * FROM usuarios WHERE userEmail = ?");
    $buscarLogin->bindValue(1,$userEmail);
    $buscarLogin->execute();
    
    $usuario = $buscarLogin->fetch(PDO::FETCH_ASSOC);
    
    if ($usuario) {
        if (password_verify($senha, $usuario['userSenha'])) {
            echo "Login bem-sucedido!";
            $_SESSION['usuario'] = $userEmail;
            header('Location:sessionStart.php');
         } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
 
     
}
 
?>