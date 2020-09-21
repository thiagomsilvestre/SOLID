<?php
require_once('EmailServices.php');
require_once('CPFServices.php');

class Cliente
{
    public $id;
    public $nome;
    public $email;
    public $cpf;

    public function isValid()
    {
        $emailServices = new EmailServices();
        $cpfServices = new CPFServices();
        
        return $emailServices->isValid($this->email) && $cpfServices->isValid($this->cpf);
    }
}
