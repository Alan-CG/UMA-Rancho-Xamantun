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
    <br>
    <main class="fixed-top-offset">
        <div class="container">
            <h4 class="text-center">Formulario de registro de especie</h4>
            <div class="card card-default border-light shadow p-3 mb-5">
                <form action="model/alta_especie_fauna.php" method="POST" class="needs-validation" novalidate>
                    <div class="row row-cols-3">
                        <div class="mb-3">
                            <label class="form-label" for="input_nombrecientifico">Nombre Científico</label>
                            <input type="text" class="form-control" id="input_nombrecientifico"
                                name="input_nombrecientifico" placeholder="Nombre Científico de la especie" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_nombrecomun">Nombre Común</label>
                            <input type="text" class="form-control" id="input_nombrecomun"
                                name="input_nombrecomun" placeholder="Nombre Científico de la especie" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_reino">Reino</label>
                            <input type="text" class="form-control" id="input_reino"
                                name="input_reino" placeholder="Reino al que pertenece" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_filo">Filo</label>
                            <input type="text" class="form-control" id="input_filo"
                                name="input_filo" placeholder="Filo al que pertenece" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_clase">Clase</label>
                            <input type="text" class="form-control" id="input_clase"
                                name="input_clase" placeholder="Clase a la que pertenece" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_orden">Orden</label>
                            <input type="text" class="form-control" id="input_orden"
                                name="input_orden" placeholder="Orden al que pertenece" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_familia">Familia</label>
                            <input type="text" class="form-control" id="input_familia"
                                name="input_familia" placeholder="Familia a la que pertenece" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_genero">Género</label>
                            <input type="text" class="form-control" id="input_genero"
                                name="input_genero" placeholder="Genero al que pertenece" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_especie">Especie</label>
                            <input type="text" class="form-control" id="input_especie"
                                name="input_especie" placeholder="Especie" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                    </div>
                    <div class="row row-cols-2">
                        <div class="mb-3">
                            <label class="form-label" for="input_descripcion">Descripción Física</label>
                            <textarea type="text" class="form-control" name="input_descripcion" id="input_descripcion"
                                placeholder="Descripción física de la especie" required></textarea>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_habitat">Hábitat</label>
                            <textarea type="text" class="form-control" id="input_habitat"
                                name="input_habitat" placeholder="Hábitat de la especie" required></textarea>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                    </div>
                    <div class="row row-cols-3">
                        <div class="mb-3">
                            <label class="form-label" for="input_conservacion">Estado de conservación</label>
                            <input type="text" class="form-control" id="input_conservacion"
                                name="input_conservacion" placeholder="Estado de conservación de la especie" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-success" name="submit">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div style="padding-bottom:0.5cm" class="row w-100 align-items-center">
                <div class="col text-center">
                    <a href="especie_faunaR.php" class="btn btn-success bi bi-arrow-return-left"></a>
                </div>
            </div>
        </div>
        <script src="JS/bootstrap_validation.js"></script>
    </main>
    <br>
    <footer class=" bg-danger text-white text-center py-2 fixed-bottom shadow">
        <div class="container-fluid">
            <h4>&copy; 2025-UMA del Rancho Xamantún. Todos los derechos reservados.</h4>
        </div>
    </footer>
</body>

</html>