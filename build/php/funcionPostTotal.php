
<?php 
				include ('postEncabezadoMenu.php');
				
				//Código PHP para ver sesiones activas 
      			include ("conexion.php");

      			$sesionesActivas = mysqli_query($conexion, "select IDsesion, fecha_sesion, totalSi, totalParcial, totalNo, estatus_sesion from sesiones order by idSesion desc limit 8");
      		//Fin de código PHP de sesiones activas
      		?>
