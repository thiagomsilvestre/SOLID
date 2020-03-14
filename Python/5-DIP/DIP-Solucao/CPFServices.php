<?php
require_once('Interfaces/ICPFServices.php');

class CPFServices implements ICPFServices
{
    public function isValid($cpf)
    {
        return (strlen($cpf) == 11);
    }
}