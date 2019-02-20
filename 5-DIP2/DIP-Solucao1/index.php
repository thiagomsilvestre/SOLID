<?php
require_once "Notification.php";
require_once "User.php";

$notification = new Notification();

$command = new User($notification);
$command->handle();