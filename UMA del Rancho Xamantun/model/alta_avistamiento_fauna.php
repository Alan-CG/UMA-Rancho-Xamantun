<?php
include 'conexion_bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {

        // Sanitización de los datos del formulario

        $id_avistamiento=filter_input(INPUT_POST,"input_especie",FILTER_SANITIZE_NUMBER_INT);
        $fecha = $_POST['input_fecha_avista'];
        $latitud=filter_input(INPUT_POST,"input_latitud",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $longitud=filter_input(INPUT_POST,"input_longitud",FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
        $descripcion = filter_input(INPUT_POST,'input_descripcion',FILTER_SANITIZE_SPECIAL_CHARS);

        // Validación y procesado de la imagen
        if (isset($_FILES['input_imagen']) && $_FILES['input_imagen']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['input_imagen']['tmp_name'];
            $fileName = $_FILES['input_imagen']['name'];
            $fileSize = $_FILES['input_imagen']['size'];
            $fileType = $_FILES['input_imagen']['type'];

            // Validar el tipo de archivo (solo imágenes)
            $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($fileType, $allowedFileTypes)) {
                throw new Exception("Tipo de archivo no permitido.");
            }

            // Definir directorio de subida y asegurar que exista
            $uploadDir = '../uploads/avistamientos_fauna/';
            $relativePath = 'uploads/avistamientos_fauna/';


            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
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
        }
        // Consulta SQL preparada para la inserción
        $sql = "INSERT INTO avistamientos_animales (id_avistamiento_especie, fecha_avistamiento, latitud,longitud,descripcion,ruta_imagen) 
        VALUES (:id_avistamiento_especie, :fecha_avistamiento, :latitud,:longitud,:descripcion,:ruta_imagen)";
        $stmt = $conn->prepare($sql);

        // Asociar los parámetros
        $stmt->bindParam(':id_avistamiento_especie', $id_avistamiento);
        $stmt->bindParam(':fecha_avistamiento', $fecha);
        $stmt->bindParam(':latitud', $latitud);
        $stmt->bindParam(':longitud', $longitud);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ruta_imagen', $relativePathToSave);

        //Ejecución de la consulta
        $stmt->execute();
        //Redirección a la página leer
        header('Location: ../avistamiento_faunaR.php');

    } catch (PDOException $e) {
        echo "Ha ocurrido un error: " . $e->getMessage();
    }
}
