<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesquisar usuário</title>
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
        <h1 class="fw-bold">Pesquisar usuários</h1>
       </div>


       <div class="container">
        <form action="Controllers/controllersSearchUsers.php" method="post">

         <input type="text" name="userEmail" id="" class="form-control form-control-lg mt-3" placeholder="Email">
  
        <div class="div">
        <button type="submit" class="mt-3 btn btn-success">Buscar</button>
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
