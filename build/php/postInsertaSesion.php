
<?php 

//Llamamos a la conexión a la base de datos
include ("conexion.php");

//Recibimos datos del formulario
$fecha_sesion = $_POST['fecha_sesion'];
//$fecha_sesion = date('ymd');
$fecha_sesion_insertar = date("y-m-d", strtotime($fecha_sesion));; 
//Fecha de hoy
$fecha_actual = date('y-m-d');

$validaFechaInsercion = mysqli_query($conexion, "select fecha_sesion from sesiones where fecha_sesion = '$fecha_sesion_insertar'");
if(mysqli_num_rows($validaFechaInsercion) > 0){
	echo'<script type="text/javascript">
      alert("Ya existe una sesión con la fecha que deseas crear, no puedes crear dos sesiones para la misma fecha!");
      window.history.back();
      </script>';
}
else 
{

//Valido que no existan sesiones abiertas
if (buscaSesionesDuplicadas() == 1){
	echo'<script type="text/javascript">
      alert("Existen sesiones abiertas, ¡Favor de cerrarlas antes de continuar!");
      window.history.back();
      </script>';
} else {
	//Antes de insertar valido que las fechas ingresadas sean correctas	
	if ($fecha_sesion_insertar < $fecha_actual) {
		echo'<script type="text/javascript">
      	alert("No se puede seleccionar una fecha anterior a la de hoy favor de verificar");
      	window.history.back();
      	</script>';
	} 
	else {

		//Realizamos la consulta de la query
		$insertar = "insert into sesiones (fecha_sesion, estatus_sesion) values ('$fecha_sesion_insertar', '1')";
	
		//Ejecutamos Query
		$resultado = mysqli_query($conexion, $insertar);
	
		//Realizó una validación, en caso de que por alguna razón no se cree mi sesión me avisa. En caso de que si, igualmente me manda aviso.
		if (!$resultado){
			echo'<script type="text/javascript">
			  alert("Error al crear la sesión, vuelve a intentarlo");
			  window.location.href="../post/postAdminEncuesta.php";
			  </script>';
		} else {
		echo'<script type="text/javascript">
			  alert("Sesión creada correctamente");
			  window.location.href="../post/postAdminEncuesta.php";
			  </script>';
		}
		}
	}
}

function buscaSesionesDuplicadas(){
	include ("conexion.php");
	$validaSesiones = mysqli_query($conexion, "select estatus_sesion from sesiones where estatus_sesion = 1");
	if(mysqli_num_rows($validaSesiones) > 0){
		return 1;
	} else {
		return 0;
	}
}

//Cerramos la conexión
mysqli_close($conexion);
	
 ?>