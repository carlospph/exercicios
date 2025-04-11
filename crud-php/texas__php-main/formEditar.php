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
    require_once 'Includes/header.php';
?>

  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <h1 class="fw-bold">Atualizar dados do usuário</h1>
       </div>


       <div class="container">
        <form action="Controllers/controllersUpdateUser.php" method="post">

        <!-- realizar uma busca aqui pelo id -->


        <input type="text" name="userId" id="" class="form-control form-control-lg mt-3" value="<?php echo $_GET['id']?>">
        <input type="text" name="userNome" id="" class="form-control form-control-lg mt-3" placeholder="Nome completo">
        <input type="text" name="userEmail" id="" class="form-control form-control-lg mt-3" placeholder="Email">
        <input type="password" name="userSenha" id="" class="form-control form-control-lg mt-3" placeholder="Senha">
 
        <div class="div">
        <button type="submit" class="mt-3 btn btn-success">Cadastrar</button>
        <button type="reset" class="mt-3 btn btn-danger">Limpar</button>
        </div>
        </form>
       </div>
    </div>
  </div>

  <!-- Script do Bootstrap e dependências -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
