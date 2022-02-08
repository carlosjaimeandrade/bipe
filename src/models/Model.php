<?php

namespace src\models;

use src\config\DataBase as Database;



class Model
{

    protected $tabela = "";


    public function __construct($tabela)
    {
        $this->tabela = $tabela;
    }

    public function insert($dados, $id_linha)
    {
        $conn = Database::getConnection();
        $values = "";
        foreach ($dados[0] as $key => $value) {
            if ($key != "id") {
                $values .= "'$value'" . ",";
            }
        }
        $values = "null," . $values . "'$id_linha'";
        $query = "INSERT INTO " . $this->tabela . " VALUES($values)";
        $conn->query($query);
    }


    public function selectFilter($col, $where = "")
    {
        $conn = Database::getConnection();

        $query = "SELECT {$col} FROM " . $this->tabela . " WHERE {$where}";

        $exec = $conn->query($query);
        $result = [];
        while ($row = $exec->fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }

    public function selectAll(){
        $conn = Database::getConnection();

        $query = "SELECT * FROM " . $this->tabela;

        $exec = $conn->query($query);
        $result = [];
        while ($row = $exec->fetch_assoc()) {
            array_push($result, $row);
        }
        return $result;
    }
}
