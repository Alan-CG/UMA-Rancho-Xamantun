<?php include 'model/leer_avistamientos_flora.php' ?>;
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
                  <li><a class="dropdown-item" href="especie_animalR.php">Especies</a></li>
                  <li><a class="dropdown-item" href="#">Avistamientos</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark fs-3 d-none d-md-block" href="#" role="button"
                  data-bs-toggle="dropdown">Flora</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="especie_floraR.php">Especies</a></li>
                  <li><a class="dropdown-item" href="#">Avistamientos</a></li>
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
      <h4 class="text-center">Listado de avistamientos de fauna</h4>
      <div class="row row-cols-5 grid gap-2">
        <?php
        foreach ($avistamientos as $avistamiento): ?>
          <div style="width: 16rem;" class="card card-default border-light shadow p-3 mb-5">
            <img  src="<?= $avistamiento['ruta_imagen']; ?>" class="card-img-top" style="max-width: 220; height: 160;">
            <div class="card-body">
              <h5 class="card-title"><?= $avistamiento['especie']; ?></h5>
              <p style="max-width: 190; height: 50;" class="card-text"><?= $avistamiento['descripcion']; ?></p>
              <p class="card-text"><?= $avistamiento['fecha_avistamiento']; ?></p>
              <a href="avistamiento_flora_ficha.php?id_avistamiento=<?= $avistamiento['id_avistamiento'] ?>" class="btn btn-primary">Más información</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
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