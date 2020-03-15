<?php
require_once('DebitoConta.php');

$debitar = new DebitoConta();
$debitar->debitar(100, '1', 2);
