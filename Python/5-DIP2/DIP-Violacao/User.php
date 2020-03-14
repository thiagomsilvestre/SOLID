<?php

class User 
{
    public function handle()
    {
        $notification = new Notification();

        $notification->send();
    }
}