<?php
require_once "PersonalityObject.php";

class OptimisticObject extends PersonalityObject
{
    function Speak()
    {
        return "The glass is half full. \n";
    }
}