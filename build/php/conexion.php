<?php 
    $conexion = mysqli_connect('localhost', 'id7158476_root', '123456789');
    mysqli_select_db($conexion, 'id7158476_postmortem');
    $resultado = mysqli_query($conexion, "select IDsesion, fecha_sesion, totalSi, totalNo, totalParcial, 
        estatus_sesion from sesiones where estatus_sesion = 1 order by fecha_sesion desc limit 1");
?>