<?php
$dbname = "app";
$servidor = "localhost:3310";
$user = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>