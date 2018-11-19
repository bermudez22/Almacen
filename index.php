<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
        
        
       <?php
        $conexion = new mysqli('localhost', 'root', '', 'almacen');
        $consulta = $conexion -> query("Set names utf8");
        $consulta = $conexion -> query("SELECT * FROM usuarios2 "); 
        ?>
        <div class="container-fluid">
            <div class ="row-fluid">
                <div class="span4">
                  <select name="listaNombres" id="lista">
                      <?php
                      while ($fila = $consulta->fetch_assoc()) {
                          if (file_exists("img1/" . $fila["DNI"] . ".jpg")) {
                              echo '<option>'.$fila["DNI"].'</option>';  
                          }
                      }
                      ?>
                  </select>   
                </div>
                <div class="span8" id='marcoCentral'>
                    
                </div>
            </div>
            
        </div>
        <script>
            $(document).ready(function(){
               $('#marcoCentral').load("cargafoto.php");
               
               $('#lista').on('change', function() {
                   $('#marcoCentral').load("cargafoto.php", {
                       dni_seleccionado : this.value 
                   });
                     
                });
            });
        </script>
    </body>
</html>
