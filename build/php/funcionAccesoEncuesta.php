<?php
    <!--Validación de estatus de sesión-->
    <?php 
      //Traemos la conexión de la base de datos
      include ("conexion.php");

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
?>