<?php 
require_once'vendor/autoload.php';
echo"pdskal";
use Cocur\Slugify\Slugify;
$slug = new slugify();
echo "<br>".$slug->slugify("teste com acentuação","_");