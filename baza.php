<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "sql7829896";

$dsn = "mysql:host=$host;dbname=$name;";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $db = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "Greska pri povezivanju za bazom";
    die();
}
