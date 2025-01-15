<?php include 'model/leer_datos_fauna.php' ?>;
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
      <h4 class="text-center">Listado de especies de Fauna</h4>
      <div class="card card-default border-light shadow p-3 mb-5">
        <div class="form-row">
          <div class="form-group col">
            <a class="btn btn-success shadow-sm" href="especie_faunaC.php">Nuevo registro</a>
          </div>
        </div>
        <div class="row w-100 align-items-center table-responsive-md justify-content-center">
          <div class="col text-center table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th hidden scope="col">ID</th>
                  <th scope="col">Nombre Científico</th>
                  <th scope="col">Nombre Común</th>
                  <th scope="col">Reino</th>
                  <th scope="col">Filo</th>
                  <th scope="col">Clase</th>
                  <th scope="col">Orden</th>
                  <th scope="col">Familia</th>
                  <th scope="col">Género</th>
                  <th scope="col">Especie</th>
                  <th scope="col">Descripcion física</th>
                  <th scope="col">Hábitat</th>
                  <th scope="col">Estado de conservación</th>
                  <th scope="col">Editar registro</th>
                  <th scope="col">Eliminar Registro</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($especies as $especie): ?>
                  <tr>
                    <td hidden>
                      <?= $especie['id_especie']; ?>
                    </td>
                    <td>
                      <?= $especie['nombre_cientifico']; ?>
                    </td>
                    <td>
                      <?= $especie['nombre_comun']; ?>
                    </td>
                    <td>
                      <?= $especie['reino']; ?>
                    </td>
                    <td>
                      <?= $especie['filo']; ?>
                    </td>
                    <td>
                      <?= $especie['clase']; ?>
                    </td>
                    <td>
                      <?= $especie['orden']; ?>
                    </td>
                    <td>
                      <?= $especie['familia']; ?>
                    </td>
                    <td>
                      <?= $especie['genero']; ?>
                    </td>
                    <td>
                      <?= $especie['especie']; ?>
                    </td>
                    <td>
                      <?= $especie['descripcion_fisica']; ?>
                    </td>
                    <td>
                      <?= $especie['habitat']; ?>
                    </td>
                    <td>
                      <?= $especie['estado_conservacion']; ?>
                    </td>
                    <td>
                      <a class="bi bi bi-pencil-square btn btn-primary shadow-sm"
                        href="especie_faunaU.php?id_especie=<?= $especie['id_especie'] ?>"></a>
                    </td>
                    <td>
                      <a class="bi bi-trash3-fill btn btn-danger shadow-sm"
                        href="model/borrar_especie_fauna.php?id_especie=<?= $especie['id_especie'] ?>"></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
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