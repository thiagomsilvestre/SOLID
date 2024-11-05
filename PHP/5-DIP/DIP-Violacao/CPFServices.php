<?php
class CPFServices
{
    public function isValid(string $cpf)
    {
        $cpfLength = strlen($cpf);
        return $cpfLength == 11;
    }
}