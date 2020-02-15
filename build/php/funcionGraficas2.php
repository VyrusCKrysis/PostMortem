<?php
            if (isset($_POST['fecha']) == 1) {        
                //Recibimos el parámetro de fecha de postEncabezadoGrafica.php
                $fechaSeleccionada = $_POST['fecha'];
                //Convertimos a una fecha válida
                $fechaSeleccionBuscar = date("y-m-d", strtotime($fechaSeleccionada));
                
                //Generamos una nueva conexión a la base de datos.
                $conexion = mysqli_connect('localhost', 'id7158476_root', '123456789');
                mysqli_select_db($conexion, 'id7158476_postmortem');
                
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