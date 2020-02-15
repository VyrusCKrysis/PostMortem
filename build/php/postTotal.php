<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
	<script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>
    <title>Postmortem - BOC BestDay</title>
</head>
<body>
	<div class="container">
		<div class="menu-total">
			<?php include ('funcionPostTotal.php'); ?>

		</div>
		
		<div class="tabla-totales">
			<p class="h2 text-center">Lecciones aprendidas - Sesiones de postmortem</p>
			<small id="dateSesion" class="form-text text-muted">La tabla contiene los resultados de las útimas ocho sesiones, ordenadas de la más cercana a la más antigua.</small>

			<table class="table tab">
			  <thead class="thead-dark text-center">
			    <tr>
			      <th scope="col">ID de Sesión</th>
		          <th scope="col">Fecha de Sesión</th>
		          <th scope="col">Total Si</th>
		          <th scope="col">Total Parcial</th>
		          <th scope="col">Total NO</th>
		          <th scope="col">Total Votos</th>
		          <th scope="col">Promedio Votos</th>
			    </tr>
			  </thead>
			  <tbody class="text-center">
			  	<?php 
		        	while ($fila = mysqli_fetch_array($sesionesActivas)){
		        		$idSesion =  $fila['IDsesion'];
		        		$fecha_sesion =  $fila['fecha_sesion'];
		        		$totalSi =  $fila['totalSi'];
		        		$totalParcial =  $fila['totalParcial'];
		        		$totalNo =  $fila['totalNo'];
		        		$suma = $totalSi + $totalParcial + $totalNo;

		        		if ($suma == 0) {
		        			$promedio = 0;
		        		} else {
		        			$promedio = ($totalSi / $suma * 100);
		        		}
		        		
		        		
		        ?>
			    <tr>
			      <th scope="row"><?php echo $idSesion; ?></th>
			      <td><?php echo $fecha_sesion; ?></td>
			      <td><?php echo $totalSi  ?></td>
			      <td><?php echo $totalParcial  ?></td>
			      <td><?php echo $totalNo  ?></td>
			      <td><?php echo $totalSi + $totalParcial + $totalNo ?></td>
			      <td><strong><?php echo round($promedio, PHP_ROUND_HALF_UP); ?>% </strong></td>
			    </tr>
			    <?php
			    //Finaliza while
					}
					//Cerramos la conexión
					mysqli_close($conexion);
         		?>
			  </tbody>
			</table>

		</div>
	</div>
</body>
</html>