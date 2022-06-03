<?php
$driver = 'mysql';
$host = 'localhost:3307';
$db_name = 'level1';
$db_user = 'root';
$db_password = '';
$charset = 'utf8';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

];
$dsn = "$driver:host=$host;dbname=$db_name;charset=$charset";

$pdo = new PDO($dsn, $db_user, $db_password, $options);
