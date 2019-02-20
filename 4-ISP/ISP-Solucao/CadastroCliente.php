<?php
require_once('Interfaces/ICadastroCliente.php');

class CadastroCliente implements ICadastroCliente
{
    public function validarDados()
    {
        // Validar CPF, Email
        echo "\n validar dados";
    }

    public function salvarBanco()
    {
        // Insert na tabela Cliente
        echo "\n salvar banco";
    }

    public function enviarEmail()
    {
        // Enviar e-mail para o cliente
        echo "\n enviar Email";
    }
}
