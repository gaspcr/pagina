<?php
try {
    $require = dirname(__FILE__) . '/data.php';
    $conexion = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}