<?php

    abstract class Conexao{

        protected function conectaDB(){
            try{
                $conn = new PDO("mysql:host=localhost;dbname=database_texas__27032025","root", "");
                return $conn;
                //echo "Conectado com sucesso";
                }catch(PDOException $error){
                    //echo "Erro no banco".$error->getMessage();
                }
            }
    }
?>