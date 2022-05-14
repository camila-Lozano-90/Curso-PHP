<!-- inicio del contenido -->
<?php
require_once 'PLANTILLA/cabecera.php'
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">INICIO DE CONTACTOS</h1>
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
                                <label for="exampleInputEmail1" class="form-label">TELEFONO</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">MOVIL</label>
                                <input type="text" class="form-control" id="movil" name="movil" aria-describedby="emailHelp">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
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
                            <th scope="col">EMail</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">MOVIL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        require_once 'crud/listarContactos.php';
                        //template : blade {{$list}} 
                        //javascript: fetch y jsons
                        //reac o vuejs o angular
                        foreach ($resultado as $datos) {
                        ?>
                            <tr>
                                <td><?php echo $datos->Id ?> </td>
                                <td><?php echo $datos->nombre ?></td>
                                <td><?php echo $datos->Apellido ?> </td>
                                <td><?php echo $datos->Email ?> </td>
                                <td><?php echo $datos->Telefono ?> </td>
                                <td><?php echo $datos->Movil ?> </td>
                                <td> <a href="frmEditar.php?id=<?php echo $datos->Id; ?>" type="button" class="btn btn-info" class="bi bi-pencil-square"><i class="bi bi-pencil-square"> </i></a> </td>
                                <td> <a type="button" class="btn btn-danger" href="crud/eliminarContactos.php?id=<?php echo $datos->Id; ?>"><i class="bi bi-trash"></i></a> </td>

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