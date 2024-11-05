<?php
require_once 'DebitoConta.php';

class DebitoContaPoupanca extends DebitoConta
{
    public function debitar(float $valor, string $conta)
    {
        echo PHP_EOL . 'Debito conta Poupança => ';
        // Valida Aniversário da Conta
        // Debita Conta Corrente
        return DebitoConta::formatarTransacao();
    }
}
