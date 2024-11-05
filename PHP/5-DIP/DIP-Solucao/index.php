<?php
require_once 'Cliente.php';
require_once 'ClienteRepository.php';
require_once 'EmailServices.php';
require_once 'ClienteServices.php';
require_once 'CPFServices.php';



$clienteRepository = new ClienteRepository();
$emailServices = new EmailServices();
$cpfServices = new CPFServices();

$clienteService = new ClienteServices($emailServices, $clienteRepository);
$cliente = new Cliente($cpfServices, $emailServices);

$cliente->cpf = "22955451886";
$cliente->nome = "Thiago";
$cliente->email = "thiagomsilvestre@gmail.com";

echo "\n";
echo $clienteService->adicionarCliente($cliente);