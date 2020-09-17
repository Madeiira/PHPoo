<?php
//Composicao Quando uma classe precisa de outra para executar sua ação, ultiliza parte de outra classe para si, dentro do seu escopo, quando uma é destruida a outra vai junto

class Pessoa{
    public function atribuirNome($nome){
        return "O nome da pessoa é: ".$nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){

        $this->pessoa =new Pessoa();
        $this->nome = $nome;

    }
    public function exibirNome(){
        echo $this->pessoa->atribuirNome($this->nome);
    }

}
$exibe = new Exibe("Madeira");
$exibe->exibirNome();