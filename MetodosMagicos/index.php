<?php

class Pedido{
    private $dados = array();


    public function __set($Ids, $valor){
        $this->dados[$Ids] = $valor;
    }
    public function __get($Ids){
        return $this->dados[$Ids];
    }

    public function __invoke(){
        echo "Objeto como função";
        //echo $pedido(); -- EXEMPLO FORA DO ESCOPO
    }
    public function __tostring(){
        echo"Tentando imprimir o objeto";
        //echo $pedido; -- EXEMPLO FORA DO ESCOPO
    }


}

$pedido = new Pedido();
$pedido -> nome ="Microfone";
$pedido -> valor= 59;
$pedido -> sku= 411;
echo $pedido->nome."<br>";
echo $pedido->valor."<br>";
echo $pedido->sku."<br>";
