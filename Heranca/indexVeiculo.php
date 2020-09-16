<?php 

//Herança é um recurso que permite que classes compartilhem atributos e métodos

class Veiculo{

    public $modelo;
    public $cor;
    public $ano;
    
    public function Andar(){
        echo "Andando";
    }
    
    public function Parar(){
        echo"Parado";
    }

}




