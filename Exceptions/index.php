<?php

 class network{
     
    public function cadastrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Email Invalido",123);
        else:
            echo "Email Válido <br>Cadastrado com sucesso";
        endif;
    }

}
$Network = new network();
    try{
        $Network->cadastrarEmail("Joao@asd.com.br"); 
    } catch(Exception $e){
        echo "Messagem:".$e->getMessage();
        echo "<br>Código:".$e->getCode();
    }