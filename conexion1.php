<?php 

$conexion = mysqli_connect('localhost', 'id11848820_root', 'bocbestday');
mysqli_select_db($conexion, 'id11848820_postmortem_bestday');
$resultado = mysqli_query($conexion, "select IDsesion, fecha_sesion, estatus_sesion from sesiones where estatus_sesion = 1 order by fecha_sesion desc limit 1");


//prueba de github
?>