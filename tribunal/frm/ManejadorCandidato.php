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
include 'Candidato.php';
include 'CandidatoControlador.php';

$alumnoA = new CandidatoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $alumnoA->setId('NULL');
           $alumnoA->setApellidos($_REQUEST['apellidos']);
           $alumnoA->setNombres($_REQUEST['nombres']);
           $alumnoA->setDui($_REQUEST['dui']);
           $alumnoA->setFoto($_REQUEST['foto']);
           $alumnoA->setCandidatura($_REQUEST['candidatura']);
           $alumnoA->setPartido($_REQUEST['partido']);
           $alumnoA->setDepto($_REQUEST['depto']);
           $alumnoA->setMunicipio($_REQUEST['municipio']);
           $alumnoA->setEleccion($_REQUEST['eleccion']);
           $datosObj=array($alumnoA->getId(),
                           $alumnoA->getApellidos(),
                           $alumnoA->getNombres(),
                           $alumnoA->getDui(),
                           $alumnoA->getFoto(),
                           $alumnoA->getCandidatura(),
                           $alumnoA->getPartido(),
                           $alumnoA->getDepto(),
                           $alumnoA->getMunicipio(),
                           $alumnoA->getEleccion());
           print $alumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'ManejadorCandidato.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM inscrip_candidato';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"candidato","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
     </body>
</html>
