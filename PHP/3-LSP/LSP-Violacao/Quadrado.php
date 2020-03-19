<?php
require_once('Retangulo.php');

class Quadrado extends Retangulo
{
    public function setAltura($value) {
        $this->largura = $this->altura = $value;
    }
    
    public function setLargura($value) {
        $this->largura = $this->altura = $value;
    }
}


