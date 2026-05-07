<?php

$host = "mysql-pattygiraldo.alwaysdata.net";
$usuario = "pattygiraldo";
$password = "pato2026";
$bd = "gestion_articulos";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>