<?php
include 'conexion_bd.php';
$id = isset($_REQUEST['id_avistamiento']) ? $_REQUEST['id_avistamiento'] : null;
$estado=0;

try {
    // Consulta SQL preparada para la eliminación(cambio de estado de activo a inactivo)
    $sql = "UPDATE avistamientos_animales SET activo=:estado WHERE id_avistamiento =:id";
    $stmt = $conn->prepare($sql);

    //Asociar parametros
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':id', $id);
    // Ejecuta de la consulta
    $stmt->execute();

    //Redirección a la página de leer
    header('Location: ../avistamiento_faunaR.php');

} catch (PDOException $e) {
    echo "Ha ocurrido un error: " . $e->getMessage();
}
?>