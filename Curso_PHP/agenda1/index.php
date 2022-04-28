<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <h2><strong>Aquí van los recuerdos de tu ex:</strong></h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="img/cat4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Registro de Contactos</h5>
            <form action="./CRUD/insertarContacto.php" method="POST">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del contacto">
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
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono del contacto">
              </div>
              <div class="mb-3">
                <label for="celular" class="form-label">Celular:</label>
                <input type="number" class="form-control" name="celular" id="celular" placeholder="Número del contacto">
              </div>
              <button value="enviar" type="submit" class="btn btn-info">Guardar</button>
            </form>
            <!-- <a href="#" class="btn btn-info">Go somewhere</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img class="opacity-50" src="img/cat2.jpg" alt="">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">nombre</th>
              <th scope="col">apellidos</th>
              <th scope="col">email</th>
              <th scope="col">telefono</th>
              <th scope="col">movil</th>
              <th scope="col">activo</th>
            </tr>
          </thead>

          <tbody>
            <?php
            require_once 'CRUD/listaContactos.php';
            foreach ($resultado as $datos) {
              echo '
                <tr>
                  <td>' . $datos[0] . '</td>
                  <td>' . $datos[1] . '</td>
                  <td>' . $datos[2] . '</td>
                  <td>' . $datos[3] . '</td>
                  <td>' . $datos[4] . '</td>
                  <td>' . $datos[5] . '</td>
                  <td>' . $datos[6] . '</td>
                </tr>
                <td><button class="btn btn-info"><i class="bi bi-pencil-square"></i></button></td>
                <td><button class="btn btn-info"><i class="bi bi-trash"></i></button></td>';
            }
            //templates : blade {{$lista}}
            //javascript : fetch y json
            //react o vuejs o angular

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>