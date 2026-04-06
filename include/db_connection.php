<?php

$host = 'localhost';
$db   = 'inventory';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db;";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo "connected";
} catch (PDOException $e) {
    echo "Connection failed";
    exit;
}
