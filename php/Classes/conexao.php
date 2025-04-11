<?php

#CONEXAO NO SERVIDOR ONLINE
    // $host_name = "sql202.infinityfree.com";
    // $db_name = "if0_37972623_db__usuarios";
    // $user = "if0_37972623";
    // $password = "rlgjwf15ps4";


#CONEXAO NO SERVIDOR LOCAL
    $host_name = "127.0.0.1";
    $db_name = "site";
    $user = "root";
    $password = "";

    try {
        $pdo = new PDO("mysql:host=$host_name;dbname=$db_name", $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        //echo "Conexão bem-sucedida...!";
    } catch (\PDOException $er) {
        //echo "Erro de conexão: " . $er->getMessage();
    }


?>