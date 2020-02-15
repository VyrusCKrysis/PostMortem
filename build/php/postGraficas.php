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

            <?php include ('funcionGraficas1.php'); ?>

            <div id="container" style=""></div>

                <?php include ('funcionGraficas2.php'); ?>

                <div class="row">
                    <p class="h6">Fecha que actualmente se está graficando: 
                        <strong>
                            <?php include ('funcionGraficas3.php'); ?>
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
        </div>
	</body>
</html>
