<?php
require_once 'config.php';

try {
    //La siguiente consulta obtiene los puntos almacenados en la Base de datos
    // Tu consulta preparada con un placeholder para la palabra clave
    $sql = 'SELECT nombre, latitud, longitud FROM puntos_mapa WHERE nombre LIKE :nombre';
    
    // Preparar la consulta
    $stmt = $pdo->prepare($sql);
    
    // Vincular el parámetro, agregando los comodines % para LIKE
    $palabraClave = 'felino';
    $stmt->bindValue(':nombre', "%$palabraClave%", PDO::PARAM_STR);
    
    // Ejecutar la consulta
    $stmt->execute();
    
    $puntos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //A continuación se retorna la consulta en formato JSON
    echo json_encode($puntos);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}