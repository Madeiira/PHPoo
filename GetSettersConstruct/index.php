<?php

class login{
    private $email;
    private $senha;
    private $nome;
    public function __construct($email, $senha, $nome){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);

    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        //criando um filtro
        $email= filter_var($e, FILTER_SANITIZE_EMAIL);
         $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
         $this->senha = $s;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
         $this->nome = $n;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado";
        else:
            echo"Senha ou email incorretos";
        endif;
    }

}
//se caso atributos for private essa forma direta não irá funcionar
//utilizando construct no class
$logar = new Login("teste/@teste.com","123456","Gabriel Madeira");
//setando os parametros
$logar->Logar();
echo"<br>";
//pegando os parametros
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
echo $logar->getNome();