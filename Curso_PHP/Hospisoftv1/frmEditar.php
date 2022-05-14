<?php

$id=$_GET['id'];
/* echo $id; */


require_once 'crud/bd.php';
$sql='SELECT *FROM contacto where Id=?';
$sentencia=$pdo->prepare($sql); //prepara consulta
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
    <h1>FORMULARIO, EDITAR!</h1>
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <form action="crud/actualizarContacto.php" method="POST">   
        <div class="mb-3">
            <label for="id" class="form-label">id</label>
            <input type="text" name="id" class="form-control" value="<?php echo$resultado->Id;?>" readonly name="id" id="id">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo$resultado->nombre;?>" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">apellido</label>
            <input type="text" name="Apellido" class="form-control" value="<?php echo$resultado->Apellido;?>" name="apellidos" id="apellidos">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" name="Email" class="form-control" value="<?php echo$resultado->Email;?>" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="movil" class="form-label">TELEFONO</label>
            <input type="text" name="Telefono" class="form-control" value="<?php echo$resultado->Telefono;?>" name="movil" id="movil">
        </div>
        <div class="mb-3">
            <label for="movil" class="form-label">movil</label>
            <input type="text" name="movil" class="form-control" value="<?php echo$resultado->Movil;?>" name="movil" id="movil">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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