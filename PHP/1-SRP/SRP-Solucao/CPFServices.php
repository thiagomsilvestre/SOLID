<?php
class CPFServices
{
    public function isValid($cpf)
    {
        return (strlen($cpf) == 11);
    }
}
