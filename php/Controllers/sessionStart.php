<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home do usuário</title>
</head>
<body>

<?php
    require_once '../Includes/header__area__user.php    ';
?>
    <section class="py-5 bg-light my-3">
        <div class="container">
            
                <h1>
                    Bem-vindo
                </h1>
                <?php echo $_SESSION['usuario']; ?>


         </div>
    </section>
</body>
</html>