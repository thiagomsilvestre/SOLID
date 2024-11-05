<?php
require_once "DebitoConta.php";

class DebitoContaCorrente extends DebitoConta
{
    public function debitar(float $valor, string $conta)
    {
        echo PHP_EOL . 'Debito conta corrente => ';
        // Debita Conta Corrente
        return DebitoConta::formatarTransacao();
    }
}
