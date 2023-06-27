<?php
include_once '../config/conection.php';
$conex = new mysqli($host,$user,$pass,$db);
    if ($conex->connect_error) {
        die("Error de conexión: " . $conex->connect_error);
    }
?>