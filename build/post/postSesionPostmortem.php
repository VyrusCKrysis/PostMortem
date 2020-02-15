<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://kit.fontawesome.com/ad0b402f87.js" crossorigin="anonymous"></script>

    <script>
      var si = 0;
      var parcial = 0;
      var no =0;


      function contadorSi(){
        si = si + 1;
        document.getElementById("contador_clic").value = si;
        alert("Gracias por su respuesta");
      }

      function contadorParcial(){
        parcial = parcial + 1;
        document.getElementById("contador_clic2").value = parcial;
        alert("Gracias por su respuesta");
      }

      function contadorNo(){
        no = no + 1;
        document.getElementById("contador_clic3").value = no;
        alert("Gracias por su respuesta");
      }

    </script>
    <title>Posmortem BOC BestDay</title>
  </head>
  <body>

    <?php include ('../php/funcionSesionPostmortem.php'); ?>
    <div class="container">
      
      <div class="row header">
        <br>
        <br>
        <?php include ('postEncabezadoMenu.php'); ?>
        <p class="h3 text-justify">En la sesión de postmotem del día: <strong> 
          <?php 
            echo $fecha_sesion_encabezado;
          ?> 
        </strong> ¿Identificas alguna lección aprendida que puedas compartir con tu equipo?</p>
      </div>
      
      
      <form action="../php/postEnviaEncuesta.php" method="POST">
        <div class="row body">
          <div class="cont1 col-md-4 col-sm-12">
            <div class="circulo1  text-center">
              <a href="#" type="" onclick="contadorSi()"><h1>Si</h1></a>
              <input type="hidden" id="contador_clic" name ="contador_clic" readonly="readonly" value = "0">
            </div>
          </div>
          
          <div class="cont2 col-md-4 col-sm-12">
            <div class="circulo2  text-center">
              <a href="#" type="" onclick="contadorParcial()"><h1>Parcialmente</h1></a>
              <input type="hidden" id="contador_clic2" name ="contador_clic2" readonly="readonly" value = "0">
            </div>
          </div>

          <div class="cont3 col-md-4 col-sm-12">
            <div class="circulo3  text-center">
              <a href="#" type="" onclick="contadorNo()"><h1>No</h1></a>
              <input type="hidden" id="contador_clic3" name ="contador_clic3" readonly="readonly" value = "0">
            </div>
          </div>
        </div>

      
        <div class="row footer col-xs-12">
          <!-- Boton de modal -->
          <button type="button" class="btn btn-success btn-lg boton" data-toggle="modal" data-target="#exampleModal">
          Guardar Resultados <i class="fas fa-save"></i>
          </button>
        </div>

          <!--Fin del botón del modal-->

          <!--Inicio del Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Importante!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Al dar clic en la opción Si, Guardar también estará cerrando la sesión actual: ¿Desea guardar los datos recabados?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-success btn-lg">Si, Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <!--Fin del Modal--> 
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  </body>
</html>