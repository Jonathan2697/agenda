<?php require('conexion.php');

  $query ="SELECT * FROM t_agenda";
  $resultado = $mysqli->query($query);
  ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <title>Contactos</title>
</head>
<body>
<header>

    <ul class="nav navbar-nav navbar-right" style="background:	#8aa8c2 " >

      <nav class="main_nav_container" >
				<div class="main_nav" >
					<ul class="main_nav_list"style="background-color:powderblue;">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
<a class="navbar-brand" href="<?php echo base_url()?>/"><img src="plantilla/images/agen.png" width="100" height="100"></a>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>/">Inicio <span class="sr-only">(current)</span></a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>/">Contactos</a>
    </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="<?php echo base_url()?>/">Categorias</a>
    </li>
    </ul>
  </div>
</nav>
</header>

<body>
  <section aling ="center" style="background-image:url(plantilla/images/gala.jpg)">

  <h1 align="center" >Registrar contacto</h1>
                  <div class="container" >
                  <div class="row" style="background:#A7D4D5">
                  <div class="col-sm-12">
                  <form method="POST" action="<?php echo base_url().'/crear' ?>">

  <div>Selecciona la categoria: <select name="id_categoria" id="id_categoria">
          <option value="0">Selecciona la categoria:</option>
          <?php while($row = $resultado->fetch_assoc()) { ?>
            <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['id_categoria']; ?></option>
          <?php } ?>
</select></div>
<br>
                  <label for="nombre">Nombre</label>
                  <input type="text" name="nombre" id=nombre class="form-control">

                  <label for="nombre">Apellido Paterno</label>
                  <input type="text" name="paterno" id=paterno class="form-control">

                  <label for="nombre">Apellido Materno</label>
                  <input type="text" name="materno" id=materno class="form-control">

                  <label for="nombre">Telefono</label>
                  <input type="text" name="telefono" id=telefono class="form-control">

                  <label for="nombre">Email</label>
                  <input type="text" name="email" id=email class="form-control">

                  <label for="nombre">Fecha</label>
                  <input type="text" name="fecha" id=fecha class="form-control">
                  <br>
                  <button class="btn btn-primary">Guardar</button>
                  </form>
                  </div>
                  </div>
                  </div>

              <hr>
              <h2 align="center" >Listado de contactos </h2>
                  <div class="row" aling ="center"style="background:#A7D4D5" >
                  <div class="col-sm-12" style="background:	#A7D4D5 ">
                  <div class ="table table-responsive"style="background: skyblue ">
                  <table class=" table table-hover table-bordered" style="background:	#A7D4D5 ">
                  <tr>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha</th>

                  <th>Editar</th>
                  <th>Eliminar</th>
                  </tr>
                  <?php foreach($datos as $key): ?>
                  <tr>

                  <td><?php echo $key->nombre ?></td>
                  <td><?php echo $key->paterno ?></td>
                  <td><?php echo $key->materno ?></td>

                  <td><?php echo $key->telefono ?></td>

                  <td><?php echo $key->email ?></td>

                  <td><?php echo $key->fecha ?></td>
                  <td>
                  <a href="<?php echo base_url().'/obtenerdatos/'.$key->id_contacto ?>" class="btn btn-warning btn-sm">Editar</a>

                  </td>
                  <td>
                  <a href="<?php echo base_url().'/eliminar/'.$key->id_contacto ?>" class= "btn btn-danger btn-sm">Eliminar</a>
                  </td>
                  </tr>
                  <?php endforeach; ?>
                  </table>
                  </div>
                  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

      let mensaje = '<?php echo $mensaje ?>';

      if(mensaje == '1'){
        swal(';)''Se agrego correctamente', 'success');

      }else if(mensaje == '0'){

        swal(':()','Error al agregar', 'error');

      }else if(mensaje == '2'){

        swal('B)','Se actualizo correctamente', 'success');

      }else if(mensaje == '3'){

        swal('XXX','Error al actualizar', 'error');

      }else if(mensaje == '4'){

        swal(':O',' Se elimino con exito', 'success');

      }else if(mensaje == '5'){

        swal(':(','Error al querer eliminar', 'error');

      }

</script>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
