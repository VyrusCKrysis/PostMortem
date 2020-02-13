<?php 

//Llamamos a la conexión a la base de datos
include ("conexion.php");
while ($fila = mysqli_fetch_array($resultado)){
      $estatus_sesion = $fila['estatus_sesion'];
      $IDsesion = $fila ['IDsesion'];
      $fecha_sesion = $fila['fecha_sesion'];
    }

//Valido que no exista sesión abierta
	if (isset($estatus_sesion) == 0) {
		echo'<script type="text/javascript">
	    alert("Ninguna sesión está abierta, no puedes actualizar sesiones cerradas");
	    window.location.href="postTotal.php";
	    </script>';
	} else {
		//Recibimos datos del formulario
		$contador_clic = $_POST['contador_clic'];
		$contador_clic2 = $_POST['contador_clic2'];
		$contador_clic3 = $_POST['contador_clic3'];

		//Realizamos la consulta de la query
		$update = "update sesiones set totalSi = '$contador_clic', totalParcial = '$contador_clic2', totalNo = '$contador_clic3', estatus_sesion = 0 where estatus_sesion = 1";

		//Ejecutamos Query
		$resultado = mysqli_query($conexion, $update);

		//Realizó una validación, en caso de que por alguna razón no se guarden mis datos me avisa. En caso de que si, igualmente me manda aviso.
		if (!$resultado){
			echo'<script type="text/javascript">
		  	alert("Error  al guardar datos, vuelve a intentarlo");
		   	window.location.href="postTotal.php";
		    </script>';
		} else {
			echo'<script type="text/javascript">
		    alert("Datos guardados correctamente");
		    window.location.href="postTotal.php";
		    </script>';
		}

	}
	//Cerramos la conexión
	mysqli_close($conexion);
 ?>

