<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novo usuário</title>

  <!--- Bootstrap:: --->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!---icones-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>

<?php
    require_once 'Includes/header.php';
    require_once 'Classes/conexao.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="mt-5 mb-4">Área de Login</h1>
            <form action="/Site/SistemaLogin/Controllers/processarLogin.php" method="POST">
 

                <div class="mt-2 mb-2">
                    <input type="email" name="userEmail" id="inputEmail" class="form-control form-control-lg" placeholder="E-mail">
                </div>

                <div class="mt-2 mb-2">
                    <input type="password" name="senhaDigitada" id="inputSenha" class="form-control form-control-lg" placeholder="Senha">
                </div>

                <div class="mt-3">
                    <button type="submit" name="validar" id="btn-validar" class="btn btn-success">Acessar</button>
                    <button type="reset" name="limpar" id="btn-limpar" class="btn btn-danger">Limpar</button>
                </div>

            </form>
        </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
