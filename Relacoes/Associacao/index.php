<?php
//Quando um objeto "utliza" outro, porém, um não depende do outro

class pedido{
    public $produto;
    public $sku;

    public function setProduto($p){
        $this->produto = $p;
    }
    public function getProduto(){
        return $this->nome;
    }
    
    public function setSKU($s){
        $this->sku = $s;
    }
    public function getSKU(){
        return $this->sku;
    }
    

}

class cliente{
    public $nome;
    public $numero;

    public function setNome($n){
        $this->nome = $n;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setNumero($n){
        $this->numero = $n;
    }
    public function getNumero(){
        return $this->numero;
    }
}

$Clientepai = new cliente();
$Clientepai->setNome("Joao");
$Clientepai->setNumero(199982252);

$Pedido = new pedido();
$Pedido->setSKU(112);
$Pedido->Clientepai = $Clientepai;

$dados = array(

    'SKU' => $Pedido->getSKU(),
    'Nome_Cliente' => $Pedido->Clientepai->getNome(),
    'Numero_Cliente' => $Pedido->Clientepai->getNumero()

);
?>
<pre>
<?php
var_dump($dados);
?>
<pre>