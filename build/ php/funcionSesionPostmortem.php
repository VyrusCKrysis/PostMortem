<?php 
      include ("conexion.php");
//se crea la conexion con la base de datos


//mediante le ciclo while se le pasan los datos de Id DE SESION el estatus y la fecha
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
