<?php
require_once('Interfaces/IClienteServices.php');
require_once('Interfaces/IClienteRepository.php');
require_once('Interfaces/IEmailServices.php');
require_once('Cliente.php');


class ClienteServices implements IClienteServices
{
    private $clienteRepository;
    private $emailServices;

    public function __construct(
        IEmailServices $emailServices,
        IClienteRepository $clienteRepository
    ) {
        $this->emailServices = $emailServices;
        $this->clienteRepository = $clienteRepository;
    }

    public function adicionarCliente(Cliente $cliente)
    {
        if (!$cliente->isValid())
            return "Dados inválidos";

        $this->clienteRepository->adicionarCliente($cliente);

        $this->emailServices->enviar("empresa@empresa.com", $cliente->nome, $cliente->email, "Bem Vindo", "Parabéns está Cadastrado");

        return "Cliente cadastrado com sucesso";
    }
}