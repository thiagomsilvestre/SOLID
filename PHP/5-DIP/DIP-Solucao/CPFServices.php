<?php
require_once 'Interfaces/ICPFServices.php';

class CPFServices implements ICPFServices
{
    public function isValid($cpf)
    {
        $cpfLength = strlen($cpf);
        return $cpfLength == 11;
    }
}