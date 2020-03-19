<?php

require_once('Quadrado.php');
require_once('Retangulo.php');


$ret = new Retangulo();
$ret->setLargura(10);
$ret->setAltura(5);
imprimir($ret);
verificar($ret);


$quad = new Quadrado();
$quad->setLargura(10);
$quad->setAltura(5);
imprimir($quad);
verificar($quad);


function imprimir(Retangulo $ret)
{
    echo "\n Cálculo da área do Retângulo";
    echo "\n Altura -> " . $ret->altura;
    echo "\n Largura -> " . $ret->largura;
    echo "\n Área -> " . $ret->area();
    echo "\n";
}


function verificar(Retangulo $r) {

    if($r->area() != 50) {
        throw new Exception('Área errada!');
    }

    return true;
}

