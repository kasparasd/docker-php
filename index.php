<?php

$host = '127.0.0.1';
$db = 'php_docker';
$user = 'php_docker';
$password = 'password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo  $e;
}
