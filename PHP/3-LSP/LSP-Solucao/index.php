<?php

require_once('CalculoArea.php');
require_once('Quadrado.php');
require_once('Retangulo.php');


$calcular = new CalculoArea();

$quad = new Quadrado(5,5);
echo "\n";
print_r($quad);
$calcular->obterArea($quad);


$ret = new Retangulo(5,6);
echo "\n\n";
print_r($ret);
$calcular->obterArea($ret);

