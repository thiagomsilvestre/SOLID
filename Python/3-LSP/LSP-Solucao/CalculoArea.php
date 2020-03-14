<?php
require_once('Quadrado.php');
require_once('Paralelogramo.php');

class CalculoArea
{
    public static function obterArea(Paralelogramo $ret)
    {
        echo "\n Calculo da área -> " . $ret->area();
    }
}