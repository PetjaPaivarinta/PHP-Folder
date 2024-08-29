<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "crudkontakter";

$charset = 'utf8mb4';
$collate = 'utf8mb4_unicode_ci';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];

$pdo = new PDO($dsn, $username, $password, $options);

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (Exception $exception) {
    throw new RuntimeException('Could not connect to database');
}