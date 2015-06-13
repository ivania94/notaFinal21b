<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
    <script src="../libs/jquery-2.1.0.js"></script>
    <link rel="stylesheet" href="../libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <script src="../libs/validacion/jquery.validate.min.js"></script>
    <script src="../libs/validacion/messages.js"></script>
    <script src="../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    </head>
    <body>

    <header class="portada">
       
        <h1>Sistema de Inscripciones De El Salvador</h1>
        
</header>
<div>
  <a href="../welcome.php" title="">MENU PRINCIPAL</a></b>
</div>

<?php
include 'coneccion.php';
include 'Partido.php';
include 'PartidoControlador.php';

$alumnoA = new PartidoControlador();

if(isset($_REQUEST['bot'])){
           $alumnoA->setId($_REQUEST['id']);
           $alumnoA->setNombre($_REQUEST['nombre']);
           $alumnoA->setDui($_REQUEST['dui']);
           $alumnoA->setRepresentante($_REQUEST['representante']);
           $alumnoA->setFoto($_REQUEST['foto']);
           $datosObj=array($alumnoA->getId(),
                           $alumnoA->getNombre(),
                           $alumnoA->getDui(),
                           $alumnoA->getRepresentante(),
                           $alumnoA->getFoto());
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $alumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'ManejadorPartido.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>

