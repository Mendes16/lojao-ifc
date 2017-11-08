<?php

require_once "../../config/config.php";


class conexao{

    public function getConexao(){

        try {

            $conexao = new PDO("mysql:host=" . HOST . ";dbname=" . BANCO, USUARIO, SENHA);
        }catch (Exception $e){
            echo "deu o erro: {$e->getMessage()} na linha {$e->getLine()}";
        }
    }

}
//testar
//$conexao = new Conexao();
//$conexao->getConexao();