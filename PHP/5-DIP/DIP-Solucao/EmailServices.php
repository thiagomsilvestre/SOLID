<?php
require_once('Interfaces/IEmailServices.php');

class EmailServices implements IEmailServices
{
    public function isValid($email)
    {
        return strpos($email, '@');
    }

    public function enviar($de, $nome, $para, $assunto, $mensagem)
    {
        // $Email = new Email($config);
        // $Email->destinatario($nome, $para);
        // $Email->assunto($assunto);
        // $Email->mensagem($mensagem);
        // $Email->enviar();

        echo "EmailServices: Email enviado. \n";
    }
}
