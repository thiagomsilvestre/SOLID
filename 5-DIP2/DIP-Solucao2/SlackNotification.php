<?php
require_once "Interfaces/INotification.php";

class SlackNotification implements INotification
{
    public function send()
    {
        echo "Slack - Injection notification";
    }
}