<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>

    <title>Postmortem - BOC BestDay</title>
  </head>
  <body>
    
    <div class="container">
      <br>
      <div class="inicio">
        <p class= "h2 text-center">Sección para activar una nueva sesión de postmortem</p>
        <br>
      </div>
      
      <?php 
        //Traemos el encabezado (Menú)
        include ('postEncabezadoMenu.php');
       ?>
      
      <form action="postInsertaSesion.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Estatus</label>
          <input type="number" class="form-control" id="estatus" aria-describedby="dateSesion" name = "estatus" placeholder="1" readonly="readonly">
          <small id="dateSesion" class="form-text text-muted">Por default las sesiones se crean activas.</small>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Fecha de Sesión</label>
          <input type="date" class="form-control" id="fecha_sesion" aria-describedby="dateSesion" name = "fecha_sesion" required="required">
          <small id="dateSesion" class="form-text text-muted">Selecciona la fecha de la sesión de postmortem de la cuál deseas recopilar las lecciones aprendidas.</small>
        </div>
        
        <button type="submit" class="btn btn-success btn-lg nuevaSesion">Nueva Sesión <i class="fas fa-plus"></i> </button>
      </form>

      <br>
      <br>
      <p class= "h2 text-center">Las siguientes sesiones se encuentran activas.</p>
      <br>
      
      <!--Código PHP para ver sesiones activas-->
      <?php  
      //Traemos la conexión de la base de datos
      include ("conexion.php");

      //Validamos que no existan sesiones activas
      $sesionesActivas = mysqli_query($conexion, "select IDsesion, fecha_sesion, estatus_sesion from sesiones where estatus_sesion = 1");
        
      
      ?>
      <!--Fin de código PHP de sesiones activas-->
      
      <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">ID de Sesión</th>
            <th scope="col">Fecha de Sesión</th>
            <th scope="col">Estatus de Sesión</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            //Mostramos los datos en una tabla
            while ($fila = mysqli_fetch_array($sesionesActivas)){
           ?>
          <tr class="text-center">
            <th scope="row"><?php echo $fila['IDsesion']; ?></th>
            <td><?php echo $fila['fecha_sesion']; ?></td>
            <td><?php echo $fila['estatus_sesion']; ?></td>
          </tr>
          <?php 
          //Finaliza while
          }

          //Cerramos la conexión
          mysqli_close($conexion);
         ?>
        </tbody>
      </table>
      
      <br>
      <form action="postEliminaSesion.php" method="POST">       
        <button type="submit" class="btn btn-danger btn-lg cerrarSesion"> Cerrar Sesión <i class="fas fa-trash-alt"></i></button>
      </form>
      <br>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>