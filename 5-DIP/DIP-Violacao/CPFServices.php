<?php
class CPFServices
{
    public function isValid(string $cpf)
    {
        return (strlen($cpf) == 11);
    }
}