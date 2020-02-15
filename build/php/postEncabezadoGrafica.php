<!DOCTYPE HTML>
<html>
	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estilos.css">
        <script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>

	<title>Posmortem BOC BestDay</title>
	</head>
	<body>
    <div class="container"> 
        <script src="../code/highcharts.js"></script>
        <script src="../code/modules/exporting.js"></script>
        <script src="../code/modules/export-data.js"></script>

            <div class="container">
                <br>

                <!--Enviamos por POST desde este formulario el parámetro de fecha-->
                <form action = "postGraficas.php" method = "POST">
                    <div class="row">
                        <div class="etiqueta col-md-8 col-sm-12 text-center">
                            <label for="seleccionaFecha" class="h3 seleccionaFecha">Selecciona la fecha a graficar: </label>
                        </div>

                        <div class="calendario col-md-2 col-sm-12 input-group input-group-prepend">
                            <input class= "border border-success rounded" type="date" id="fecha" name ="fecha" required="required">    
                        </div>

                        <div class="boton col-md-2 col-sm-12 ">
                            <button type="submit" class="btn btn-success btn-lg active btn-block">Buscar</button>
                        </div>
                    </div>                              
                </form>
                <br>
            </div>
        </div>
	</body>
</html>
