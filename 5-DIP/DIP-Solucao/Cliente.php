<?php
require_once('Interfaces/ICPFServices.php');
require_once('Interfaces/IEmailServices.php');

class Cliente
{
    protected $cpfServices;
    protected $emailServices;

    public function __construct(
        ICPFServices $cpfServices, 
        IEmailServices $emailServices)
    {
        $this->cpfServices = $cpfServices;
        $this->emailServices = $emailServices;
    }

    public $clienteId;
    public $nome;
    public $email;
    public $cpf;
    public $dataCadastro;

    public function isValid()
    {
        return $this->emailServices->isValid($this->email) && $this->cpfServices->isValid($this->cpf);
    }
}