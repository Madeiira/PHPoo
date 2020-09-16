<?php
class Compra{

    public static $vendendor;

    public static function anuncio(){
        echo self::$vendendor." Anunciou: ";
        echo"Pera2R$";

    }
    
    public $cliente;
    public function getCliente(){
        return $this->cliente;
    }
    public function setCliente($c){
         $this->cliente = $c;
    }

    public function comprador(){
        echo"Quero 300Gramas<br>";
    }



}



Compra::$vendendor = "Joao";
Compra::anuncio();
echo"<br>";

$compras = new Compra();

$compras->setCliente("<br>Anjos: ");
echo $compras->getCliente();

$compras->comprador();

