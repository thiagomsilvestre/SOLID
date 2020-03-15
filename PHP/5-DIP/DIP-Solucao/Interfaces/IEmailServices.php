<?php

interface IEmailServices
{
    public function isValid(string $email);
    public function enviar(string $de, string $nome, string $para, string $assunto, string $mensagem);
}
