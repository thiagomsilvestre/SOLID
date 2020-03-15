<?php
    require_once('DebitoContaCorrente.php');
    
    $debitoConta = new DebitoContaCorrente();
    echo $debitoConta->debitar(1, '1');
