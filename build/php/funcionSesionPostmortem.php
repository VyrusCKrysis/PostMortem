<?php 
      include ("conexion.php");

      while ($fila = mysqli_fetch_array($resultado)){
        $estatus_sesion = $fila['estatus_sesion'];
        $IDsesion = $fila ['IDsesion'];
        $fecha_sesion = $fila['fecha_sesion'];
      }

      if (isset($fecha_sesion) == "") {
        $fecha_sesion_encabezado = "Sin sesion abierta";
      } else {
        $fecha_sesion_encabezado = $fecha_sesion;
      } 
?>