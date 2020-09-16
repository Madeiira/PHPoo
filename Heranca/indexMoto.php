<?php
require_once'indexVeiculo.php';
class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando Grau";
    }
    
}
$moto = new Moto();

$moto->Modelo = "XJ";
$moto->Cor = "Azul";
$moto->ano = 2020;



$moto->Andar();
echo "<br>";
echo "<br>";
$moto->darGrau();
echo "<br>";
echo "<br>";
$moto->Parar();