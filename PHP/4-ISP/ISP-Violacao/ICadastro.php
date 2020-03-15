<?php

interface ICadastro
{
    public function validarDados();
    public function salvarBanco();
    public function enviarEmail();
}
