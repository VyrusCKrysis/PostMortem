<!DOCTYPE html>
<html lang="en">
<head>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>
    <title>Postmortem - BOC BestDay</title>
  </head>
</head>
<body>
	<div class="container">

		<div class="row error">
			<div class="error-titulo col-md-12">
				<p class="h4"><i>Error 404 - Página no encontrada</i></p>
			</div>
		</div>

		<div class="row cuerpo">
			<div class="cuerpo-error col-md-12">
				<p class="h2">Ups... Lo sentimos la página que busca no existe.</p>
			</div>

			<div class="volver col-md-12">
				
				<a href="#" type="text" class="btn btn-success btn-lg" value ="Regresar a Inicio" onclick="eventoAlerta()"> Regresar a Inicio <i class="fas fa-home"></i></a>

				
			</div>
		</div>

	</div>

	<script>
		function eventoAlerta(){
			swal("Good job!", "You clicked the button!", "success");
		}
	</script>
	<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 
</body>
</html>