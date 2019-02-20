<?php

class DebitoConta
{
    const Corrente = 1;
    const Poupanca = 2;
    function debitar(float $valor, string $conta, int $tipo)
    {
        if ($tipo == self::Corrente) {
            echo 'corrente';
            // Debita Conta Corrente
        }
        if ($tipo == self::Poupanca) {
            echo 'poupança';
            // Valida Aniversário da Conta
            // Debita Conta Poupança
        }
    }
}
