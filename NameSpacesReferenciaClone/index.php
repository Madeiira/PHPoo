<?php

// namespace serve para denominar um nome a mais, para quando for chamar alguma classe/metodo existente em mais de um arquivo/ com o mesmo nome, para diversificar.

require 'models/produto.php';
require 'classes/produto.php';

use models\produto as produtoProductModels;
use produto\produto as produtoProductClasses;

$produtoD = new produtoProductModels();
$produtoD->mostrarDetalhes();
echo"<br>";

$produtoC = new produtoProductClasses();
$produtoC->setNome("Pasta De Dente");
$produtoC->setID(123);
echo"<br>";
echo $produtoC->getID();
echo"<br>";
echo $produtoC->getNome();
echo"<br>";
$produtoC->mostrarDetalhes();
echo"<br>";
echo"<br>";



//Referencia

$produtoC2 =  $produtoC;
$produtoC2->setNome("Colgate");
echo $produtoC2->getNome();

echo"<br>";
//Clonegem

$produtoC2 = clone $produtoC;
$produtoC2->setNome("Colgate");
echo $produtoC2->getNome();

