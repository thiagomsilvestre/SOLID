<?php
require_once('DebitoConta.php');

class DebitoContaInvestimento extends DebitoConta
{
    public function debitar(float $valor, string $conta)
    {
        echo 'Debito conta Investimento =>';
        // Debita Conta Investimento
        // Isentar Taxas
        return DebitoConta::formatarTransacao();
    }
}
