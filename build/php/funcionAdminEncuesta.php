<?php
    <!--Código PHP para ver sesiones activas-->
      <?php  
      //Traemos la conexión de la base de datos
      include ("conexion.php");

      //Validamos que no existan sesiones activas
      $sesionesActivas = mysqli_query($conexion, "select IDsesion, fecha_sesion, estatus_sesion from sesiones where estatus_sesion = 1");
        
      
      ?>
      <!--Fin de código PHP de sesiones activas-->
?>