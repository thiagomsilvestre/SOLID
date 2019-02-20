<?php
require_once(dirname(__FILE__) .'/../Cliente.php');

interface IClienteRepository
{
    public function adicionarCliente(Cliente $cliente);
}
