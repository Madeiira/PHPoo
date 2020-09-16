<?php

require_once'index.php';


class Santander extends Banco{
  
    public function Sacar($s){
      $this->saldo -=$s;
        echo "<hr>Sacou:".$s;
    }
    
    public function Depositar($d){

      $this->saldo +=$d;
        echo"<hr> Depositou:".$d;
    }
}

$santander = new Santander();
$santander->setSaldo(1000);
echo"<hr> Saldo: ".$santander->getSaldo();

$santander->Sacar(300);
echo"<hr> Saldo: ".$santander->getSaldo();


$santander->Depositar(200);
echo"<hr> Saldo: ".$santander->getSaldo();


