<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
      <title>formulario de inscripciones</title>
      <link href="../misEstilos/estilo.css" rel="stylesheet" type="text/css">
      <link href="../misEstilos/estilos.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
      <script src="../libs/validacion/jquery.validate.min.js"></script>
      <script src="../libs/validacion/messages.js"></script>
</head>
<body>
  <header class="portada">
    
    <h1>Sistema de Inscripciones De El Salvador</h1>

<div><br><br>
  <a href="../welcome.php" title="">MENU PRINCIPAL</a></b>
</div>
  </header><br><br>
<?php
include 'coneccion.php';
include 'PartidoControlador.php';

$alumnoA = new PartidoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $alumnoA->setId('NULL');
           $alumnoA->setNombre($_REQUEST['nombre']);
           $alumnoA->setDui($_REQUEST['dui']);
           $alumnoA->setRepresentante($_REQUEST['representante']);
           $alumnoA->setFoto($_REQUEST['foto']);
           $datosObj=array($alumnoA->getId(),
                           $alumnoA->getNombre(),
                           $alumnoA->getDui(),
                           $alumnoA->getRepresentante(),
                           $alumnoA->getFoto());
           print $alumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'ManejadorPartido.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM inscrip_partido';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"partido","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  

</body>
</html>