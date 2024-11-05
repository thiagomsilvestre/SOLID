<?php

require_once "ClienteService.php";
require_once "Cliente.php";

$clienteService = new ClienteService();

$cliente = new Cliente();

$cliente->cpf = "11111111111";
$cliente->nome = "Thiago";
$cliente->email = "thiagomsilvestre@gmail.com";

echo "\n";
echo $clienteService->adicionarCliente($cliente);
