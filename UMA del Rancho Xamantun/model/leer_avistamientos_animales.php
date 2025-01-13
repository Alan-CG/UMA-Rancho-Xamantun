<?php
include 'conexion_bd.php';

try {

    //Preparación de la consulta
    $stmt=$conn->prepare("SELECT avistamientos_animales.*,especies_animales.especie FROM avistamientos_animales 
    INNER JOIN especies_animales ON avistamientos_animales.id_avistamiento_especie = especies_animales.id_especie 
    WHERE avistamientos_animales.activo = 1 ORDER BY avistamientos_animales.id_avistamiento_especie ASC;");
    //Ejecución de la consulta
    $stmt->execute();
    //Se recuperan los datos y se almacenan en una variable
    $avistamientos = $stmt->fetchAll();


} catch (PDOException $e) {
    echo "Ha ocurrido un error: " . $e->getMessage();
}


?>