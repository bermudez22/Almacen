<!DOCTYPE html>


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
        $consulta = $conexion -> query("SELECT * FROM usuariosalmacen"); 
        ?>
        <div class="container"style="background-color: white">
            
            <!--div que contiene el titulo almacen la foto usuario-->
            <div class="card text-center">
                <div class="card-header">
                   <h1><img class="ml-3" src="img/carritoAlmacen.png" alt="Generic placeholder image" width="50" height="140">
                    Almacen</h1>
                </div>              
                <div class="card-body">
                        <div class="span8" id='marcoCentral'>   
                        </div>
                </div>
            </div>

            
                <div class ="row-fluid" style="background-color: violet">

                </div>
            
            <!--div que contiene los dni, con la consulta a la bbdd-->
                 <div class ="row-fluid" style="background-color: red">
                     
                      <div class="span4" style="background-color: yellow">
                          <h5>Seleccione DNI</h5>
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