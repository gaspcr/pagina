<?php
  try {
    #Pide las variables para conectarse a la base de datos.
    require('data.php'); 
    # Se crea la instancia de PDO
    $db = new PDO("pgsql:dbname=grupo93e2;user=grupo93;password=astro123");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>
