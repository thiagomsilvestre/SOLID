<?php
require_once(dirname(__FILE__) .'/../Cliente.php');


interface IClienteServices
{
    public function adicionarCliente(Cliente $cliente);
}
