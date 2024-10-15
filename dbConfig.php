<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "castillo";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>