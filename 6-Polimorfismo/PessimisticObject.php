<?php

require_once "PersonalityObject.php";

class PessimisticObject extends PersonalityObject
{
    function Speak()
    {
        return "The glass is half empty. \n";
    }
}