<?php

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    
    
    
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        
       return $this->saldo;
    }

    abstract protected  function Sacar($s);

    

    abstract protected  function Depositar($d);
}

