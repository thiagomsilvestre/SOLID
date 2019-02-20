<?php
class Retangulo
{
    public $largura;
    public $altura;
 
    public function setAltura($altura) {
        $this->altura = $altura;
    }
  
    public function setLargura($largura) {
        $this->largura = $largura;
    }
  
    public function area() {
        return $this->altura * $this->largura;
    }
}
