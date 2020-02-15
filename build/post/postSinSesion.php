<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
	<script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>
    <title>Postmortem - BOC BestDay</title>
  </head>
<body>
	<div class="container sin_sesion">
        <?php 
            include ('postEncabezadoMenu.php');
        ?>
		<p class="text-justify h3">En cuanto el administrador le informe que ya aperturó una sesión, favor de dar clic en el botón: "Realizar evalúación"</p>
		<br>
        

        <div class="row">
            <div class="evaluacion col-md-6 col-xs-12 text-center">
                <a href="../../index.php" class="btn btn-success btn-lg btn-block"> Realizar evaluación <i class="fas fa-pen"></i></a>
            </div>
    		
            <!--
            <div class="inicio col-md-6 text-center">
                <a href="index.php" class="btn btn-dark btn-lg"> Volver a Inicio <i class="fas fa-home"></i></a>
    	   </div>
            -->
       </div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
</html>