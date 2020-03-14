<?php
require_once "Interfaces/INotification.php";

class Notification implements INotification
{
    public function send()
    {
        echo "Injection notification";
    }
}