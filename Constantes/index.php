<?php

class Funcionario{
    const nome = "Anjos";
    const cargo = "Estágiario";

    public function exibirFuncionario(){
        echo self::nome;//dentro do escopo
        echo"<br>";
        echo self::cargo;
    }
}


class Gabriel extends Funcionario{

    const nome = "Gabriel";

    public function exibirFuncionario(){
       echo parent::nome; //fora do escopo, no parente
    }
}

$pessoa = new Gabriel();
$pessoa -> exibirFuncionario();

?>