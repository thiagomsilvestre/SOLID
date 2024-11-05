<?php
require_once "Notification.php";
require_once "SlackNotification.php";
require_once "User.php";

$notification = new Notification();

$command = new User($notification);
$command->handle();

echo "\n";

$notification = new SlackNotification();

$command = new User($notification);
$command->handle();