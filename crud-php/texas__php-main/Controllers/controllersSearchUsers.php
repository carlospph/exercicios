<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ususcar usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<?php
require_once '../Includes/header.php';
require_once '../Classes/Crud.php';
require_once '../Classes/Usuarios.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    
     $userEmail = $_POST['userEmail'];
 
    if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
        
        echo "<div class='container'>
        <div class='container alert alert-danger' role='alert'>
            Reveja todos os campos
        </div>";
        echo "<a href='javascript:history.go(-1)' class='btn btn-outline-danger'>Retornar</a>";
    }
    else{
        
        $Usuario = new Usuarios;
        $Usuario->setUserEmail($userEmail);
 

        $search = new Crud;
        $dados = $search->buscarUsuario($Usuario);

        if($dados){

            echo "<div class='container pt-4'>"; // inicio do container foreach
            foreach($dados as $item){
                echo "Nome: ".$item['userNome']."<br>";
                echo "Email: ".$item['userEmail'];
                echo "<br><br>";
                ?>
                    <a href="/texas/form__unico.php?id=<?php echo $item['userId']?>&nome=<?php echo $item['userNome']?>&email=<?php echo $item['userEmail']?>" class="btn btn-outline-primary">Editar</a> | <a href="/texas/formExcluir.php?id=<?php echo $item['userId']?>" class="btn btn-outline-danger">Excluir</a>
                <?php

                echo "<hr class='border border-success border-2 opacity-50'>";
            }
        }
        else{
            echo "Nunhm dado encontrado";
        }
        echo "</div>";//fim do container antes do foreach

    }
}

?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  </body>
</html>