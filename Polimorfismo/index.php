<?php
//Polimorfismo é alterar numa classe filha, o que foi escrito na classe pai

Class tecnologia{

    public function tec(){
        echo"Sou tecnologia do ano de 2017";
    }
    public function tipo(){
        echo"AIRDOTS";
    }
}

class tecnologiaNova extends tecnologia{

    public function tec(){
      echo"Sou a tecnologia atual";
    }

    public function tipoNovo(){
       
        $this->tec();
      }
}

$tec = new tecnologiaNova();
$tec->tec();
echo"<br>";
$tec->tipoNovo();