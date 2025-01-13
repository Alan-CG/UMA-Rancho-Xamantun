<?php
include 'conexion_bd.php';

$codigo = isset($_REQUEST['id_especie']) ? $_REQUEST['id_especie'] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $id= filter_input(INPUT_POST, "id_especie", FILTER_SANITIZE_NUMBER_INT);
        $nombre_cientifico = filter_input(INPUT_POST, "input_nombrecientifico", FILTER_SANITIZE_SPECIAL_CHARS);
        $nombre_comun = filter_input(INPUT_POST, 'input_nombrecomun', FILTER_SANITIZE_SPECIAL_CHARS);
        $reino = filter_input(INPUT_POST, 'input_reino', FILTER_SANITIZE_SPECIAL_CHARS);
        $filo = filter_input(INPUT_POST, 'input_filo', FILTER_SANITIZE_SPECIAL_CHARS);
        $clase = filter_input(INPUT_POST, 'input_clase', FILTER_SANITIZE_SPECIAL_CHARS);
        $orden = filter_input(INPUT_POST, 'input_orden', FILTER_SANITIZE_SPECIAL_CHARS);
        $familia = filter_input(INPUT_POST, 'input_familia', FILTER_SANITIZE_SPECIAL_CHARS);
        $genero = filter_input(INPUT_POST, 'input_genero', FILTER_SANITIZE_SPECIAL_CHARS);
        $especie = filter_input(INPUT_POST, 'input_especie', FILTER_SANITIZE_SPECIAL_CHARS);
        $descripcion_fisica = filter_input(INPUT_POST, 'input_descripcion', FILTER_SANITIZE_SPECIAL_CHARS);
        $habitat = filter_input(INPUT_POST, 'input_habitat', FILTER_SANITIZE_SPECIAL_CHARS);
        $estado_conservacion = filter_input(INPUT_POST, 'input_conservacion', FILTER_SANITIZE_SPECIAL_CHARS);


        // Consulta SQL preparada para la inserción
        $sql = "UPDATE especies_flora SET nombre_cientifico=:nombre_cientifico, nombre_comun=:nombre_comun, reino=:reino,filo=:filo,
        clase=:clase,orden=:orden,familia=:familia,genero=:genero,especie=:especie,
        descripcion_fisica=:descripcion_fisica,habitat=:habitat,estado_conservacion=:estado_conservacion WHERE id_especie =:id";
        $stmt = $conn->prepare($sql);

        // Asociar los parámetros
        $stmt->bindParam(':nombre_cientifico', $nombre_cientifico);
        $stmt->bindParam(':nombre_comun', $nombre_comun);
        $stmt->bindParam(':reino', $reino);
        $stmt->bindParam(':filo', $filo);
        $stmt->bindParam(':clase', $clase);
        $stmt->bindParam(':orden', $orden);
        $stmt->bindParam(':filo', $filo);
        $stmt->bindParam(':clase', $clase);
        $stmt->bindParam(':orden', $orden);
        $stmt->bindParam(':familia', $familia);
        $stmt->bindParam(':genero', $genero);
        $stmt->bindParam(':especie', $especie);
        $stmt->bindParam(':descripcion_fisica', $descripcion_fisica);
        $stmt->bindParam(':habitat', $habitat);
        $stmt->bindParam(':estado_conservacion', $estado_conservacion);
        $stmt->bindParam(':id', $id);

        //Ejecución de la consulta
        $stmt->execute();

        //Redirección a la página leer
        header('Location: ../especie_floraR.php');
    } catch (PDOException $e) {
        echo "Ha ocurrido un error: " . $e->getMessage();
    }
} else {
    // Consulta SQL preparada para la inserción
    $sql2 = "SELECT * FROM especies_flora WHERE id_especie = :id";
    $miConsulta = $conn->prepare($sql2);

    // Asociar los parámetros
    $miConsulta->bindParam(':id', $codigo);
    // Ejecuta de la consulta
    $miConsulta->execute();
}

$especies = $miConsulta->fetch();
