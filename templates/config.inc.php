<?php
$db_host = 'x';
$db_name = 'x';
$db_user = 'x';
$db_password = 'x';

// PDO Connection
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

// MySQLi Connection
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name); 
