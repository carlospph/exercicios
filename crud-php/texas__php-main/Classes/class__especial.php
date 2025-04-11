<?php
require_once 'Conexao.php';

class ClassCrud extends Conexao
{
    private $Crud;
    private $Contador;

    # Método genérico para executar queries SQL
    private function preparedStatements($Query, $Parametros = [])
    {
        try {
            $this->countParametros($Parametros);
           // $this->Crud = $this->conectaDB()->prepare($Query);

            if ($this->Contador > 0) {
                for ($I = 1; $I <= $this->Contador; $I++) {
                    $this->Crud->bindValue($I, $Parametros[$I - 1]);
                }
            }

            $this->Crud->execute();
            return $this->Crud; // Retorna a consulta preparada
        } catch (PDOException $e) {
            die("Erro na consulta: " . $e->getMessage());
        }
    }

    # Conta quantos parâmetros existem
    private function countParametros($Parametros)
    {
        $this->Contador = count($Parametros);
    }

    # Método público para INSERT, UPDATE e DELETE
    public function executeQuery($Query, $Parametros = [])
    {
        return $this->preparedStatements($Query, $Parametros);
    }

    # Método para SELECT que retorna vários registros
    public function fetchAll($Query, $Parametros = [])
    {
        $this->preparedStatements($Query, $Parametros);
        return $this->Crud->fetchAll(PDO::FETCH_ASSOC);
    }

    # Método para SELECT que retorna um único registro
    public function fetch($Query, $Parametros = [])
    {
        $this->preparedStatements($Query, $Parametros);
        return $this->Crud->fetch(PDO::FETCH_ASSOC);
    }
}

?>
