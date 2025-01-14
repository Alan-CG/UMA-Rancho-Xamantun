<?php include 'model/especie_flora_select.php' ?>;
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
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow-sm p-3 mb-5">
            <div class="container-fluid">
                <a class="navbar-brand fs-2 text-white" href="#">UMA del Rancho
                    Xamantún</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
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
                                <a class="nav-link dropdown-toggle text-dark fs-3 d-none d-md-block" href="#"
                                    role="button" data-bs-toggle="dropdown">Flora</a>
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
    <br>
    <main class="fixed-top-offset">
        <div class="container">
            <h4 class="text-center">Formulario de registro de avistamiento</h4>
            <div class="card card-default border-light shadow p-3 mb-5">
                <form action="model/alta_avistamiento_flora.php" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                    <div class="row row-cols-4">
                        <div class="mb-3">
                            <label class="form-label" for="input_especie">Especie</label>
                            <select class="form-select" id="input_especie" name="input_especie" required>
                            <?php foreach($especies as $opciones):  ?>
                                <option value="<?php echo $opciones['id_especie'] ?>"><?php echo $opciones['especie']?></option>
                            <?php endforeach ;?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_fecha_avista">Fecha del avistamiento</label>
                            <input type="date" class="form-control" id="input_fecha_avista"
                                name="input_fecha_avista" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_latitud">Latitud</label>
                            <input type="number" step="0.00000001" class="form-control" id="input_latitud"
                                name="input_latitud" placeholder="Coordenada del avistamiento" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_longitud">Longitud</label>
                            <input type="number" step="0.00000001" class="form-control" id="input_longitud"
                                name="input_longitud" placeholder="Coordenada del avistamiento" required>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>

                    </div>
                    <div class="row row-cols-2">
                        <div class="mb-3">
                            <label class="form-label" for="input_descripcion">Descripción</label>
                            <textarea class="form-control" id="input_descripcion" name="input_descripcion" placeholder="Información sobre el avistamiento" required></textarea>
                            <div class="valid-feedback">Campo correcto!</div>
                            <div class="invalid-feedback">Rellena el campo correctamente</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input_imagen">Imagen</label>
                            <input type="file" class="form-control" id="input_imagen"
                                name="input_imagen" placeholder="Orden al que pertenece" accept="image/*" required>
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
                    <a href="avistamiento_animalR.php" class="btn btn-success bi bi-arrow-return-left"></a>
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