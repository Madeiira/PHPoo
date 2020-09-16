<?php
require_once'indexVeiculo.php';
class Carro extends Veiculo{ 
    public function ligarLimpador(){
        echo "Limpando";
    }
   
}
$carro = new Carro();
$carro->Andar();
echo "<br>";
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
echo "<br>";
$carro->Parar();