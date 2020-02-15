<?php 

//Traemos la conexión de la base de datos
include ('../php/conexion.php');

//Validamos que en realidad haya sesiones abiertas
if (buscaSesionesDuplicadas () == 0){
	echo'<script type="text/javascript">
	      alert("No existen sesiones abiertas");
	      window.location.href="admin.php";
	      </script>';
}

//Realizamos la consulta de la query

	$update = "update sesiones set estatus_sesion = 0";

	//Ejecutamos Query
	$resultado = mysqli_query($conexion, $update);

//Realizó una validación, en caso de que por alguna razón no se cree mi sesión me avisa. En caso de que si, igualmente me manda aviso.
	if (!$resultado){
		echo'<script type="text/javascript">
	      alert("Error al cerrar la sesión/es, vuelve a intentarlo");
	      window.location.href="postAdminEncuesta.php";
	      </script>';
	} else {
		echo'<script type="text/javascript">
	      alert("Sesión/es cerrada/s correctamente");
	      window.location.href="postAdminEncuesta.php";
	      </script>';
	}

	function buscaSesionesDuplicadas (){
		include ("../php/conexion.php");
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