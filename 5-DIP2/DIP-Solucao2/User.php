<?php
require_once "Interfaces/INotification.php";

class User 
{
    protected $notification;

    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }

    public function handle()
    {
        $this->notification->send();
    }
}