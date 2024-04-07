<?php

$host = 'db';
$db = 'php_docker';
$user = 'php_docker';
$password = 'password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    echo "Connected successfully" . '<br>';
} catch (PDOException $e) {
    echo  $e;
}
$table_name = "php_docker_table";

$stmt = "SELECT * FROM $table_name";

$response = $conn->query($stmt)->fetchAll();

echo "<strong>$table_name: </strong>";
foreach ($response as $post) {
    echo "<p>" . $post['title'] . "</p>";
    echo "<p>" . $post['body'] . "</p>";
    echo "<p>" . $post['date_created'] . "</p>";
    echo "<hr>";
}