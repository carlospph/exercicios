<?php
require_once 'Includes/header.php';
require_once 'Classes/Crud.php';
require_once 'Classes/Usuarios.php';

if($_SERVER['REQUEST_METHOD']=='GET'){

$Usuario = new Usuarios;
$Usuario->setUserId($_GET['id']);

$buscarPorUsuarioId = new Crud;
$items = $buscarPorUsuarioId->buscarUsuarioId($Usuario);

if($items){
    foreach($items as $i){
        echo "Nome ".$i['userNome'];
        echo "<br>";
        echo "Email: ".$i['userEmail'];
        ?>

        <div class="">
            <a href="/texas/Controllers/controllersProcessarDel.php?id=<?php echo $i['userId']?>">Apagar</a>
            |
            <a href="javascript:history.go(-1)">Retornar a pesquisa</a>
        </div>
        <?php
    }
}

else{
    echo "Nenhum dado encontrado";
}
}
