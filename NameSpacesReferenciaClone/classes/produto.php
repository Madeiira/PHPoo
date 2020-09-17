<?php
namespace produto;
class produto{

    public $nome;
    public $id;
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    
    public function getID(){
        return $this->id;
    }
    public function setID($i){
         $this->id = $i;
    }

    public function __clone(){
        echo"<br> Clonagem: ";
    }
    
    public function mostrarDetalhes(){
        echo"Detalhes do produto de classes";
    }

}