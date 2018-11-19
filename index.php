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
        $consulta = $conexion -> query("SELECT * FROM usuariosalmacen"); 
        ?>
        <div class="container"style="background-color: blue">
            <div class ="row-fluid" style="background-color: green">
                <div class="span4" style="background-color: yellow">
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
                <div id="contenedor">
        
         <br/><br/>
        <label>EMAIL</label>
        <input type="text" id="numero">

        <br/><br/>
        <label>NOMBRE</label>
        <input type="text" id="nombre"> 

        <br/><br/>
        <label>APELLIDO</label>
        <input type="text" id="apellido"> 

       
        <br/><br/><br/>

        <select class="test" id="tecnologia" name="tecnologia[]" multiple="multiple">
            <option>2G</option> 
            <option>3G</option> 
            <option>4G</option> 
            <option>TDD</option>
        </select>

        </br></br><br/><br/>
        <button onclick="anadir();">Añadir</button>

        <input type="submit" onclick="buscar()" value="buscar">

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
