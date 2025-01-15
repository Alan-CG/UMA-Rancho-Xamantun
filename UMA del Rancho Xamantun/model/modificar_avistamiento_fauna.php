<?php
include 'conexion_bd.php';

$codigo = isset($_REQUEST['id_avistamiento']) ? $_REQUEST['id_avistamiento'] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {

        // Sanitización de los datos del formulario
        $id_avistamiento = filter_input(INPUT_POST, "id_avistamiento", FILTER_SANITIZE_NUMBER_INT);
        $id_avistamiento_especie = filter_input(INPUT_POST, "input_especie", FILTER_SANITIZE_NUMBER_INT);
        $fecha = $_POST['input_fecha_avista'];
        $latitud = filter_input(INPUT_POST, "input_latitud", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $longitud = filter_input(INPUT_POST, "input_longitud", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $descripcion = filter_input(INPUT_POST, 'input_descripcion', FILTER_SANITIZE_SPECIAL_CHARS);

        // Definir directorio de subida y asegurar que exista
        $uploadDir = '../uploads/avistamientos_fauna/';
        $relativePath = 'uploads/avistamientos_fauna/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        //variable para almacenar el nombre del archivo
        $newFileName = null;

        // Validación y procesado de la imagen
        if (isset($_FILES['input_imagen']) && $_FILES['input_imagen']['error'] === UPLOAD_ERR_OK) {

            // Recupera la imagen actual de la base de datos
            $stmt = $conn->prepare("SELECT ruta_imagen FROM avistamientos_animales WHERE id_avistamiento = :id_avistamiento");
            $stmt->bindParam(':id_avistamiento', $codigo);
            $stmt->execute();
            $ruta_avistamiento = $stmt->fetch();
            $currentImagePath = $ruta_avistamiento['ruta_imagen'];
            // Eliminar la imagen anterior si existe
            if ($currentImagePath && file_exists($currentImagePath)) {
                unlink($currentImagePath); // Elimina la imagen anterior
            }

            $fileTmpPath = $_FILES['input_imagen']['tmp_name'];
            $fileName = $_FILES['input_imagen']['name'];
            $fileSize = $_FILES['input_imagen']['size'];
            $fileType = $_FILES['input_imagen']['type'];

            // Validar el tipo de archivo (solo imágenes)
            $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($fileType, $allowedFileTypes)) {
                throw new Exception("Tipo de archivo no permitido.");
            }

            // Generar un nombre único para evitar colisiones
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $newFileName = uniqid('img_', true) . '.' . $fileExtension;

            // Ruta completa para mover el archivo
            $destPath = $uploadDir . $newFileName;

            // Ruta relativa para guardar en la base de datos
            $relativePathToSave = $relativePath . $newFileName;

            // Mover el archivo a la ubicación deseada
            if (!move_uploaded_file($fileTmpPath, $destPath)) {
                throw new Exception("Error al subir la imagen.");
            }
        } else {
            // Recupera la imagen actual de la base de datos para reutilizarla
            $stmt = $conn->prepare("SELECT ruta_imagen FROM avistamientos_animales WHERE id_avistamiento = :id_avistamiento");
            $stmt->bindParam(':id_avistamiento', $codigo);
            $stmt->execute();
            $ruta_avistamiento = $stmt->fetch();
            $relativePathToSave = $ruta_avistamiento['ruta_imagen'];
        }

        // Consulta SQL preparada para la inserción
        $sql = "UPDATE avistamientos_animales SET id_avistamiento_especie=:id_avistamiento_especie, 
        fecha_avistamiento=:fecha_avistamiento,latitud=:latitud,longitud=:longitud,descripcion=:descripcion,
        ruta_imagen=:ruta_imagen WHERE id_avistamiento=:id";

        $stmt = $conn->prepare($sql);

        // Asociar los parámetros
        $stmt->bindParam(':id_avistamiento_especie', $id_avistamiento_especie);
        $stmt->bindParam(':fecha_avistamiento', $fecha);
        $stmt->bindParam(':latitud', $latitud);
        $stmt->bindParam(':longitud', $longitud);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ruta_imagen', $relativePathToSave);
        $stmt->bindParam(':id', $id_avistamiento);

        //Ejecución de la consulta
        $stmt->execute();
        //Redirección a la página leer
        header('Location: ../avistamiento_faunaR.php');
    } catch (PDOException $e) {
        echo "Ha ocurrido un error: " . $e->getMessage();
    }
} else {
    // Consulta SQL preparada para la inserción
    $sql2 = "SELECT * FROM avistamientos_animales WHERE id_avistamiento = :id";
    $miConsulta = $conn->prepare($sql2);

    // Asociar los parámetros
    $miConsulta->bindParam(':id', $codigo);
    // Ejecuta de la consulta
    $miConsulta->execute();
}

$avistamientos = $miConsulta->fetch();
