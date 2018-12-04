<!DOCTYPE html>


        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Trivial</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/regular.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/solid.min.css" rel="stylesheet" type="text/css"/>
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
            
            <!--div que contiene el titulo almacen la foto usuario-->
            <div class="card text-center">
                <div class="card-header">
                   <h1><img class="ml-3" src="img/carritoAlmacen.png" alt="Generic placeholder image" width="50" height="140">
                    Almacen</h1>
                </div>              
            </div>
        
       
    <link rel="shortcut icon" type="image/x-icon" href="image/trivial.png"
          

       
            <div class ="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/>
                        <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                        <br/>
                        <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                        <br/>
                        <button id="boton1" class="btn btn-primary btn-block" type="submit"><img src="image/silueta-de-usuario.png" height="25" width="20">Iniciar Sesion</img></button>
                        <br/>
                        <p>¿No tienes cuenta?</p>
                        <button id="boton1" class="btn btn-primary btn-block"  onclick="registra();" type="submit"><img src="image/flecha2.gif" height="25" width="20" >Registrate</img></button>
                        
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
         
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
         // document ready se ejecuta cuando toda la página se ha cargado correctamente
        $(document).ready(function(){
            //$('#cajaNombre').hide();
        });
        
        $.validate({
          lang: 'es'
         });
         
        $('#boton1').click(function(){
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();
            
            $('#principal').load("login.php",{
                cajaNombre : _cajaNombre,
                cajaPassword : _cajaPassword
            });
        });
        
        function registra(){
            $('#principal').load("registra.php");            
        }
    </script>

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