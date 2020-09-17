<?php
//Agregacao Quando uma classe precisa de outra para executar sua ação, ultiliza parte de outra classe para si, fora do seu escopo


class Produtos{
    public $produto;
    public $sku;

    function __construct($produto,$sku){
        $this->produto = $produto;
        $this->sku = $sku;
    }
    

}

class carrinho{
    public $produtos;

   public function adicionar(Produtos $produto ){
       $this->produtos[] = $produto; 
   }
   public function exibirCarrinho(){
       foreach($this->produtos as $produto){
       echo "Nome: ".$produto->produto.'<br>';
       echo "SKU: ".$produto->sku.'<hr>';
   }
   }
}

$produto1 = new Produtos("Notebook","1500");
$produto2 = new Produtos("Notebook dell","4000");
$produto3 = new Produtos("Notebook ASUS","3500");
$produto4 = new Produtos("Notebook APPLE","5000");

$carrinho = new carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);
$carrinho->adicionar($produto3);
$carrinho->adicionar($produto4);

$carrinho->exibirCarrinho();