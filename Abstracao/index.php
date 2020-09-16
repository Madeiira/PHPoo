<?php
//banco serve como modelo para outras classes, logo é abstrata
//classe abstrata não pode ser instanciada
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

