<title>Validando dados</title>

<?php

//menu/header
require_once '../Includes/header.php';

//conexao
require_once '../Classes/conexao.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

    $userNome = htmlspecialchars($_POST['userNome']);
    $userEmail = htmlspecialchars($_POST['userEmail']);

    $userSenha = $_POST['userSenha'];
    // Criptografando a senha com bcrypt
    $senhaCripto = password_hash($userSenha, PASSWORD_BCRYPT);
 

    //busca do email inserido para ver se esta cadastrado (se cadastrado não permite cadastrar)
    $buscarEmail = $pdo->prepare("SELECT * FROM usuarios WHERE userEmail = ?");
    $buscarEmail->bindValue(1,$userEmail);
    $buscarEmail->execute();

 
    //conta se o e-mail informado já está no banco
    $contar = $buscarEmail->rowCount();   
    
    if($contar>=1){
        echo "
            <div class='m-5 alert alert-danger' role='alert'>
                O e-mail informado já está cadastrado! Faça login!
            </div>
        ";
        echo "<a href='/Site/SistemaLogin/' class='btn btn-info mx-5'> Página Inicial</a>";

    }


    else{
    $stmt = $pdo->prepare("INSERT INTO usuarios (userNome, userEmail, userSenha) VALUES (?,?,?)");
    $stmt->bindValue(1,$userNome);
    $stmt->bindValue(2,$userEmail);
    $stmt->bindValue(3,$senhaCripto);

    $inserted = $stmt->execute();

    if($inserted){
        echo "
            <div class='m-5 alert alert-success' role='alert'>
                Usuário cadastrado com sucesso!
            </div>";
        
        echo "<a href='/Site/SistemaLogin/' class='btn btn-info mx-5'> Página Inicial</a>";
    }
}
}
else{
    echo "<p>Erro na tentativa de cadastro!</p>";
}
?>