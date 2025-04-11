<?php
require_once '../Includes/header.php';
require_once '../Classes/Crud.php';
require_once '../Classes/Usuarios.php';

echo "<h2>Excluir usuário</h2>";

if($_SERVER['REQUEST_METHOD']=='GET'){
    
    $userId = $_GET['id'];

    $Usuario = new Usuarios;
    $Usuario->setUserId($userId);


    $del = new Crud;
    $del -> deleteUsuario($Usuario);

}
