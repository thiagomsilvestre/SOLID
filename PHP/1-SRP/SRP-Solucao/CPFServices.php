<?php

class CPFServices
{
    public function isValid($cpf)
    {
        $cpfLength = strlen($cpf);
        return $cpfLength == 11;
    }
}
