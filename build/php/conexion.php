<?php 
    $conexion = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conexion, 'postmortem_bestday');
    $resultado = mysqli_query($conexion, "select IDsesion, fecha_sesion, totalSi, totalNo, totalParcial, 
        estatus_sesion from sesiones where estatus_sesion = 1 order by fecha_sesion desc limit 1");
?>