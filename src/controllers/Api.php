<?php

namespace src\controllers;

header('Content-type: application/json');


use src\models\Home as HomeModel;

//lembre-se se for um sistema que contenha login neste local é ideal colocar um autenticação de SESSION

class Api
{

    public function buscar()
    {
        if (count($_POST) > 0) {
            $id_linha = $_POST['id_linha'];
            $codigo = $_POST['codigo'];
            $bipe = new HomeModel('dados');
            $dados = $bipe->selectFilter("*", " codigo =  '$codigo'");

            if (count($dados) > 0) {
                $encontrou = new HomeModel('encontrou');
                $encontrou->insert($dados, $id_linha);
                echo json_encode($dados);
            } else {
                echo json_encode(false);
            }
        }
    }
}
