<?php
require_once('EmailServices.php');
require_once('ClienteRepository.php');

class ClienteService
{
    function adicionarCliente($cliente)
    {
        if (!$cliente->isValid())
            return "Dados inválidos";

        $repo = new ClienteRepository();
        $repo->adicionarCliente($cliente);
        
        $emailServices = new EmailServices();
        $emailServices->enviar("empresa@empresa.com", $cliente->nome, $cliente->email, "Bem Vindo", "Parabéns está Cadastrado");

        return "ClienteService: Cliente cadastrado com sucesso \n";
    }
}
