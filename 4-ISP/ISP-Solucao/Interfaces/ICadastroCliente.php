<?php
interface ICadastroCliente
{
    public function validarDados();
    public function salvarBanco();
    public function enviarEmail();
}
