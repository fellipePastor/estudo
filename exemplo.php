<?php
require_once "vendor/autoload.php"; // oyxa os autoload dentro das biblioteca composer 

use \fellipe\estudo\search;  //obtem a função research

$busca = new search; // instancia a classe em um objeto 

$resultado = $busca->getEnderecoZipCode('30870360');

print_r($resultado);
