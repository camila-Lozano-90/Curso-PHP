<!-- inicio del contenido -->
<?php
require_once 'PLANTILLA/cabecera.php'
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>Mantenimiento médico</h5>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-6 text-center">
                <marquee behavior="" direction="">
                    <!-- <h1>formulario</h1> -->
                </marquee>
                <div class="card" style="width: 30rem;">
                    <!-- <H2>registro de contactos</H2> -->
                    <img src="./cat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">

                        <form action="./app/insertarMedico.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del médico">
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos:</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese los apellidos del contacto">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="nombre@email.com">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Especialidad:</label>
                                <input type="text" class="form-control" name="especialidad" id="especialidad" placeholder="Especialidad del médico">
                            </div>

                            <button value="enviar" type="submit" class="btn btn-success"><i class="bi bi-save"></i></button>
                        </form>

                    </div>
                </div>




                <!-- fin col -->
            </div>

            <div class="col-md-6">
                <marquee behavior="" direction="">
                    <!-- <h1>tabla</h1> -->
                </marquee>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDOS</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ESPECIALIDAD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        require_once 'app/listaMedicos.php';
                        //template : blade {{$list}} 
                        //javascript: fetch y jsons
                        //reac o vuejs o angular
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td><?php echo $datos->ID_MEDICO; ?></td>
                                <td><?php echo $datos->NOMBRE_MEDICO; ?></td>
                                <td><?php echo $datos->APELLIDOS_MEDICO; ?></td>
                                <td><?php echo $datos->EMAIL; ?> </td>
                                <td><?php echo $datos->ESPECIALIDAD; ?></td>

                                <td> <a href="./frmEditar.php?ID_MEDICO=<?php echo $datos->ID_MEDICO; ?>" class="btn btn-info"><i class="bi bi-pencil-square"></i></a></td>

                                <td> <a href="./app/eliminarMedico.php?ID_MEDICO=<?php echo $datos->ID_MEDICO; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>

                                <!-- <a  href="frmEditar.php?id=<?php //echo $datos->id;
                                                                ?>" -->


                            </tr>


                        <?php  }; ?>



                    </tbody>
                </table>





                <!-- fin col -->
            </div>

            <!-- fin row -->
        </div>



        <!-- fin container -->
    </div>








    <!-- fin del contenido -->
    <?php
    require_once 'PLANTILLA/footer.php'
    ?>