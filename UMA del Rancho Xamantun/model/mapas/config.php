<?php
$host = 'localhost';  // Cambia según tu configuración
$db = 'leaflet_coordenadas';     // Cambia según tu base de datos
$user = 'root';     // Cambia según tu usuario
$pass = ''; 

try {
    // Crear una nueva instancia de PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    
    // Establecer el modo de error de PDO a excepción
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opción: Establecer el modo de recuperación de datos
    //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    //echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    // Si ocurre un error, capturarlo y mostrar el mensaje
    die("Error en la conexión: " . $e->getMessage());
}
?>