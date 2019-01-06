<?php

$user = 'root';
$pass = '';
$db = 'test';

$db = new mysqli('127.0.0.1', $user, $pass, $db) or die("Unable to connect");
?>
