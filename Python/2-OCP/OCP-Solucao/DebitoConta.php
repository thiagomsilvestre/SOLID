<?php
abstract class DebitoConta
{
    public $NumeroTransacao;
    abstract function debitar(float $valor, string $conta);

    function formatarTransacao()
    {
        // Numero de transacao formatado
        return 'NumeroTransacao';
    }
}
