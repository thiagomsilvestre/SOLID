<?php
require_once('Paralelogramo.php');

class Quadrado extends Paralelogramo
{
    public function __construct($altura, $largura)
    {
        parent::__construct($altura, $largura);

        if ($this->largura != $this->altura) {
            throw new Exception("Os dois lados do quadrado precisam ser iguais");
        }
    } 
}
