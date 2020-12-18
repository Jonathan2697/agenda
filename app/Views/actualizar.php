<?php

$idnombre=$datos[0]['id_contacto'];
$nombre=$datos[0]['nombre'];
$paterno=$datos[0]['paterno'];
$materno=$datos[0]['materno'];
$telefono=$datos[0]['telefono'];
$email=$datos[0]['email'];
$fecha=$datos[0]['fecha'];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualizar Nombre</title>
  </head>
  <body>

  <div class="container">
    <div class="row">
    <div class="col-sm-12">
    <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
    <input type="text" name="id_contacto" id="id_contacto" hidden=""

    value="<?php echo $idnombre ?>"
                <label for="nombre">nombre</label>
                <input type="text" name="nombre" id=nombre class="form-control"
                value="<?php echo $nombre?>">

                <label for="paterno">paterno</label>
                <input type="text" name="paterno" id=paterno class="form-control"
                value="<?php echo $paterno?>">

                <label for="paterno">materno</label>
                <input type="text" name="materno" id=materno class="form-control"
                value="<?php echo $materno?>">

                <label for="paterno">telefono</label>
                <input type="text" name="telefono" id=telefono class="form-control"
                value="<?php echo $telefono?>">

                <label for="paterno">email</label>
                <input type="text" name="email" id=email class="form-control"
                value="<?php echo $email?>">

                <label for="fecha">fecha</label>
                <input type="text" name="fecha" id=fecha class="form-control"
                  value="<?php echo $fecha?>">

                <br>
                <button class="btn btn-primary">Guardar</button>
                </form>
                </div>
                </div>
                </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>
</html>