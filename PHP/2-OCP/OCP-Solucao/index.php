<?php
    require_once 'DebitoContaCorrente.php';
    require_once 'DebitoContaPoupanca.php';
    
    $debitoConta = new DebitoContaCorrente();
    echo $debitoConta->debitar(1, '1');

    $debitoConta = new DebitoContaPoupanca();
    echo $debitoConta->debitar(1, '1');
