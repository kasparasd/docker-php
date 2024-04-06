<?php

$host = '127.0.0.1'; // Docker konteinerio pavadinimas
$db = 'php_docker'; // Duomenų bazės pavadinimas
$user = 'php_docker'; // Vartotojo vardas
$password = 'password'; // Slaptažodis

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// $connect = mysqli_connect(
//     'db', # service name
//     'php_docker', # username
//     'password', # password
//     'php_docker' # db table
// );

// $table_name = "php_docker_table";

// $query = "SELECT * FROM $table_name";

// $response = mysqli_query($connect, $query);

// echo "<strong>$table_name: </strong>";
// while ($i = mysqli_fetch_assoc($response)) {
//     echo "<p>" . $i['title'] . "</p>";
//     echo "<p>" . $i['body'] . "</p>";
//     echo "<p>" . $i['date_created'] . "</p>";
//     echo "<hr>";
// }
