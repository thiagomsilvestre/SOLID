<?php

class DebitoConta
{
    const CORRENTE = 1;
    const POUPANCA = 2;
    function debitar(float $valor, string $conta, int $tipo)
    {
        if ($tipo == self::CORRENTE) {
            echo 'corrente';
            // Debita Conta Corrente
        }
        if ($tipo == self::POUPANCA) {
            echo 'poupança';
            // Valida Aniversário da Conta
            // Debita Conta Poupança
        }
    }
}
