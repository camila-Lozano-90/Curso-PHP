<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/nurse.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>C. M. Lourdes</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="./images/LOGO.png" alt="" class="img-fluid">
            </div>

            <div class="col-md-2">
                Cra 100 con 98 <br>
                Edificio la Ceiba <br>
                Cali - Valle
            </div>
            <div class="col-md-2">
                Email: clinicaLourdes@gmail.com <br>
                Citas Médicas: 5555589784
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-info-circle"></i>Acerca de</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-person-circle"></i>Citas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-person-lines-fill"></i>Contacto</a>
                            </li>
                            <li class="nav-item">
                                <!-- Button trigger modal -->
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#frmLogin"><i class="bi bi-door-open"></i>Login</a>
                                <!--<a class="nav-link" href="#"><i class="bi bi-door-open"></i>Ingresar</a>-->
                            </li>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Acción</a></li>
                                <li><a class="dropdown-item" href="#">Otra acción</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">algo mas aquí</a></li>
                            </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Búsqueda" aria-label="Search">
                            <button class="btn btn-outline-info" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </nav>


            <div class="row">
                <div class="col-md-5">
                    <div class="card-body mt-3">
                        <form method="POST" action="./crud/insertarContactos.php">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">APELLIDO</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">TELÉFONO</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">MÓVIL</label>
                                <input type="text" class="form-control" id="movil" name="movil" aria-describedby="emailHelp">
                            </div>


                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        </form>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card-body mt-3">
                    <form method="POST">
                            <div class="mb-3">
                                <label for="fecha_nace" class="form-label">FECHA DE NACIMIENTO</label>
                                <input type="date" class="form-control" id="fecha_nace" name="fecha_nace">

                            </div>
                            <div class="mb-3">
                                <label for="eps" class="form-label">EPS</label>
                                <input type="text" class="form-control" id="eps" name="eps">

                            </div>
                            <div class="mb-3">
                                <label for="usuario" class="form-label">USUARIO</label>
                                <input type="text" class="form-control" id="usuario" name="usuario">

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">CONTRASEÑA</label>
                                <input type="text" class="form-control" id="password" name="password">

                            </div>

                            <button type="submit" class="btn btn-info">GUARDAR</button>
                            <button type="close" class="btn btn-dark">CANCELAR</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-2">
                    publicidad
                </div>
            </div>


            <div class="row mt-3 p-5 bg-dark">
                <div class="col-md-6" style="color: white;">
                    <img src="./images/hospital_ico_iCONS.png" alt="">
                    <div>
                        Cra 100 con 98 <br>
                        Edificio la Ceiba <br>
                        Cali - Valle
                    </div>
                </div>
                <div class="col-md-6" style="color: white;">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">
                                Nunca compartiremos su correo electrónico con nadie más.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ver contraseña</label>
                        </div>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DEL LOGIN -->



    <!-- Modal -->
    <div class="modal fade" id="frmLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login del Sistema</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp">
                        <div id="usuarioHelp" class="form-text">
                            Ingrese el usuario registrado en el sistema.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="#password">Ver contraseña</label>
                    </div>
                    <div class="mb-3 text-center">
                        <h7>¿Aún no tiene cuenta?</h7>
                        <br>
                        <a href="frmRegistroPaciente.php">regístrese aquí</a>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FINAL DEL LOGIN -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>