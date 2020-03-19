<?php
abstract class Paralelogramo
{
    protected $altura;
    protected $largura;
    protected function __construct($altura, $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    } 

    public function area()
    {
        return $this->altura * $this->largura;
    }
}
