<?php include 'model/leer_avistamiento_flora_ficha.php' ?>;
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
  <title>Document</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand fs-2 text-white" href="#">UMA del Rancho
          Xamantún</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opciones</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-start flex-grow-1">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark fs-3" href="#" role="button"
                  data-bs-toggle="dropdown">Fauna</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="especies_fauna.php">Especies</a></li>
                  <li><a class="dropdown-item" href="avistamientos_fauna.php">Avistamientos</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark fs-3 d-none d-md-block" href="#" role="button"
                  data-bs-toggle="dropdown">Flora</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="especies_flora.php">Especies</a></li>
                  <li><a class="dropdown-item" href="avistamientos_flora.php">Avistamientos</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark fs-3 d-none d-md-block" href="#" role="button"
                  data-bs-toggle="dropdown">Administración</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="especie_faunaR.php">Registros especies Fauna</a></li>
                  <li><a class="dropdown-item" href="avistamiento_faunaR.php">Registros avistamientos Fauna</a></li>
                  <li><a class="dropdown-item" href="especie_floraR.php">Registros especies Flora</a></li>
                  <li><a class="dropdown-item" href="avistamiento_floraR.php">Registros avistamientos Flora</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark fs-3" href="#">Usuarios</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <br>
  <main class="fixed-top-offset">
    <div class="container">
      <h4 class="text-center">Ficha de avistamiento</h4>
      <div class="col">
        <a href="avistamientos_flora.php" class="btn btn-success bi bi-arrow-return-left"> Regresar</a>
      </div>
      <div class="card card-default border-light shadow p-3 mb-5">
        <div class="row">
          <div class="col">
            <input type="hidden" id="id_avistamiento" value="<?= $avistamientos['id_avistamiento'] ?>">
            <h4 class="fs-5 text">Fecha de avistamiento: <?= $avistamientos['fecha_avistamiento'] ?></h4>
            <img class="mt-3" style="width: 450; height: 300;" src="<?= $avistamientos['ruta_imagen'] ?>">
            <p style="max-width: 450px;" class="fs-5 text mt-4"> Descripción: <?= $avistamientos['descripcion'] ?></p>
          </div>
          <div class="col">
            <h4 class="fs-5 text text-center">Nombre científico: <?= $avistamientos['nombre_cientifico'] ?></h4>
            <p class="fs-5 text text-center">Nombre común: <?= $avistamientos['nombre_comun'] ?></p>
            <div id="map"></div>
            <h4 class="fs-5 text text-center mt-3">Ubicación del avistamiento</h4>
          </div>
        </div>
      </div>
      <script src="JS/puntos_avistamiento_flora.JS"></script>
    </div>
  </main>
  <br>
  <footer class=" bg-danger text-white text-center py-3 fixed-bottom">
    <div class="container-fluid">
      <h4>&copy; 2025-UMA del Rancho Xamantún. Todos los derechos reservados.</h4>
    </div>
  </footer>

</body>

</html>