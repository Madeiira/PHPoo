<?php

//Definindo classe Primeira letra Maiusculo
//Caracteristicas = atributo
// metodos funções
Class Pessoa{
    public $nome;
    public $idade;
    public function Falar(){
        // para concatenar atributos utiliza-se o this
        echo $this->nome." tem ".$this->idade." anos de idade <br>Olá ".$this->nome;
    }


}
// instancias
$rodrigo = new Pessoa();
$rodrigo->nome = "Gabriel Madeira";
$rodrigo->idade = 18;   
$rodrigo->Falar();


