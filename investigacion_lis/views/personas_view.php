<!DOCTYPE html>

<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellido'])) && ($_POST['apellido'] != '') && (isset($_POST['carnet'])) && ($_POST['carnet'] != '')) {

    $nuevo = new personas_model();
    $asd = $nuevo->setPersona($_POST['nombre'], $_POST['apellido'], $_POST['carnet']);

}
?>


<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Investigacion_1</title>
    </head>
    <body>
      

    
           

    <div class="container">
        <div class="row">
            <h1>Expresiones Regulares</h1>
            <p>Las expresiones regulares permiten definir patrones de coincidencia y aplicarlas a cadenas de texto para saber si la cadena (o parte de ella) cumple el patrón e incluso realizar transformaciones de la cadena.</p>
            <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><b>  preg_match</b></h5>
                    <p class="card-text">La función preg_match() distingue entre mayúsculas y minúsculas. Para que no distinga, debe añadirse el modificador "i" (sin comillas) al final del patrón. Este modificador no afecta las clases [[::]]..</p>
                    <p class="card-text">$cadena = "aaAA";</p>
                    <p class="card-text"> $patron1 = "/^[a-z]+$/";</p>
                    <p class="card-text">$patron2 = "/^[a-z]+$/i";</p>
                  
                    
                    <?php
                    $cadena = "aaAA";
                    $patron1 = "/^[a-z]+$/";
                    $patron2 = "/^[a-z]+$/i";
                    
                    if (preg_match($patron1, $cadena)) {
                        print "<p>La cadena $cadena son sólo letras minúsculas.</p>\n";
                    } else {
                        print "<p>La cadena $cadena no son sólo letras minúsculas.</p>\n";
                    }
                    
                    if (preg_match($patron2, $cadena)) {
                        print "<p>La cadena $cadena son sólo letras minúsculas o mayúsculas.</p>\n";
                    } else {
                        print "<p>La cadena $cadena no son sólo letras minúsculas o mayúsculas.</p>\n";
                    }
                    ?>
  
  
                  </div>
                </div>
              </div>




          </div>
        <br><br>
        <br>
        <h1>Registro de Estudiantes</h1>
        <div class="row">
            <div class="col-lg-6">

                <form action="#" method="post" class="col-lg-12">
                    Nombre: <input type="text" name="nombre" class="form-control" required >    
                    Apellido: <input type="text" name="apellido" class="form-control" required>    
                    Carnet: <input type="text" name="carnet" class="form-control" required>    
                    <br/>
                    <input type="submit" value="Añadir Estudiante" class="btn btn-success"/>
                </form>
            </div>


            <div class="col-lg-6">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carnet</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach ($datos as $dato) {
                                            
                                echo '
                                    <tr>
                                        <td>'. $dato["nombre"].'</td>
                                        <td>'. $dato["apellido"].'</td>
                                        <td>'. $dato["carnet"].'</td>

                                    </tr>
                                    ';
                                }
                            ?>
                    </tbody>
                </table>

            </div>

         </div>

         <br><br><br>

  
    </div>





    </body>


</html>
