<?php

$id=$_GET['ID_MEDICO'];
/* echo $id; */


require_once './app/BD.php';
$sql='SELECT * FROM medico where ID_MEDICO=?';
$sentencia=$PDO->prepare($sql); //prepara consulta
$sentencia->execute([$id]);
$resultado=$sentencia->fetch(PDO::FETCH_OBJ);//creo un arreglo con el resultado de la consulta
/* fechtall usalo cuando te vaya a devolver varios datos y fecth para cuando solo sea uno */
/* echo'<pre>';
var_dump($resultado);
echo'</pre>'; */

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>FORMULARIO EDITAR</h1>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <form action="./app/editarMedico.php" method="POST">   
        <div class="mb-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" name="id" id="id" class="form-control" value="<?php echo$resultado->ID_MEDICO;?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo$resultado->NOMBRE_MEDICO;?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo$resultado->APELLIDOS_MEDICO;?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo$resultado->EMAIL;?>">
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" name="especialidad" id="especialidad" class="form-control" value="<?php echo$resultado->ESPECIALIDAD;?>">
        </div>
        <button value="enviar" type="submit" class="btn btn-info">Guardar cambios</button>
    </form>



    <!-- fin col -->
    </div>


















    <!-- fin row -->
    </div>



<!-- fin container -->
    </div>

   
  

    
  </body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
     <input type="text" name="" id="" value="<?php echo $resultado->Id ?>">
     <input type="text" name="" id="" value="<?php echo $resultado->nombre ?>">
     <input type="text" name="" id="" value="<?php echo $resultado->Apellido ?>">
     <input type="text" name="" id="" value="<?php echo $resultado->Email ?>">
     <input type="text" name="" id="" value="<?php echo $resultado->Telefono ?>">
     <input type="text" name="" id="" value="<?php echo $resultado->Movil ?>">

    
    </form>
   
</body>
</html> -->