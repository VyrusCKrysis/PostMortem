<!DOCTYPE HTML>
<html>
	<head>
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>

	<title>Posmortem BOC BestDay</title>
	</head>
	<body>
    <div class="container"> 
        <script src="code/highcharts.js"></script>
        <script src="code/modules/exporting.js"></script>
        <script src="code/modules/export-data.js"></script>

        <div class="container">
        <br>

        <?php
            //Incluímos los encabezados a usar
            include ('postEncabezadoMenu.php');
            include ('postEncabezadoGrafica.php');
        ?>

        <div id="container" style=""></div>

            <?php
            if (isset($_POST['fecha']) == 1) {        
                //Recibimos el parámetro de fecha de postEncabezadoGrafica.php
                $fechaSeleccionada = $_POST['fecha'];
                //Convertimos a una fecha válida
                $fechaSeleccionBuscar = date("y-m-d", strtotime($fechaSeleccionada));
                
                //Generamos una nueva conexión a la base de datos.
                $conexion = mysqli_connect('localhost', 'id11848820_root', 'bocbestday');
                mysqli_select_db($conexion, 'id11848820_postmortem_bestday');
                
                //Ejecutamos el query para validar que la fecha solicitada exista y la validamos con el mysqli_num_rows.
                $validaFecha = mysqli_query($conexion, "select fecha_sesion from sesiones where fecha_sesion = '$fechaSeleccionBuscar'");
                    if(mysqli_num_rows($validaFecha) > 0){
                        //En caso de que exista la fecha que se intenta buscar se genera el query para mostrarlo en la gráfica.
                        $resultado = mysqli_query($conexion, "select IDsesion, fecha_sesion, totalSi, 
                        totalNo, totalParcial, estatus_sesion from sesiones where fecha_sesion = '$fechaSeleccionBuscar'");
                    }
                    else 
                    {   
                        //En caso contrario envíamos un alert para informarle al usuario.
                        echo'<script type="text/javascript">
                        alert("No existe sesión en la fecha seleccionada!");
                        </script>';
                    }
                }

                
            ?>

            <div class="row">
                <p class="h6">Fecha que actualmente se está graficando: 
                    <strong>
                        <?php 
                        
                        if (isset($fechaSeleccionBuscar) == 0) {
                            echo "Ninguna";
                        } 
                        else 
                        {
                            echo $fechaSeleccionada;
                        }
                        ?>
                    </strong>
                </p>
            </div>
        

    	<script type="text/javascript">
            Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Lecciones Aprendidas de los Postmortem'
            },
            subtitle: {
                text: 'BOC BestDay'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Votos'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Votos recopilados durante la sesión de Postmortem'
            },
            series: [{
                name: 'Votos por Sección',
                data: [

                    <?php
                        while ($fila = mysqli_fetch_array($resultado))
                        {
                            $totalSi = $fila['totalSi'];
                            $totalParcial = $fila ['totalParcial'];
                            $totalNo = $fila['totalNo'];

    		        		$suma = $totalSi + $totalParcial + $totalNo;

    		        		if ($suma == 0) {
    		        			$promedio = 0;
    		        		} else {
    		        			$promedio = ($totalSi / $suma * 100);
    		        		}
                        
                    ?>
                    ['Si', <?php echo $totalSi;  ?>],
                    ['Parcialmente', <?php echo $totalParcial;  ?>],
                    ['No', <?php echo $totalNo;  ?>],
                    ['Total de Votos', <?php echo $suma;  ?>],
                    //Preguntar si es necesario el echo del promedio
                    /*['Promedio', Aqui se imprime el echo del promedio ?>]*/
                ]
                <?php
                    }
                ?>
                ,
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '12px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
		</script>
    </div>
	</body>
</html>
