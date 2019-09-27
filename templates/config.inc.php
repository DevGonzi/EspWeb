<?php
$db_host = '85.214.153.77';
$db_name = 'esp';
$db_user = 'esp';
$db_password = 'WqvYd3D5ptsF9tAWXONb';

// PDO Connection
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);

// MySQLi Connection
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name); 