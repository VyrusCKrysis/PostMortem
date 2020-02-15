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
    <!--Validación de estatus de sesión-->
    <?php 
      //Traemos la conexión de la base de datos
      include ("../php/conexion.php");

      //Con el while tremos todos los campos del primer registro que tenga estatus 1
      while ($fila = mysqli_fetch_array($resultado)){
        $estatus_sesion = $fila['estatus_sesion'];
        $IDsesion = $fila ['IDsesion'];
        $fecha_sesion = $fila['fecha_sesion'];
      }

      //Validamos que el estatus_sesión esta activo.
      if (isset($estatus_sesion) == 1){
        echo'<script type="text/javascript">
        alert("Bienvenido al sistema de lecciones aprendidas");
        window.location.href="postSesionPostmortem.php";
        </script>';
      } else {
        echo'<script type="text/javascript">
        alert("No existe sesión abierta, favor de contactar al administrador");
        window.location.href="postSinSesion.php";
        </script>';

      //Cerramos la conexión
      mysqli_close($conexion);
      }

      ?>

    <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>