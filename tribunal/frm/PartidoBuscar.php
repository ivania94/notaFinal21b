<<?php include 'coneccion.php';?>
<?php
$conexion = new mysqli('localhost', 'root', '','votaciones');
?>

<?php  
$sql ="SELECT * FROM inscrip_partido WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
<!doctype html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>pagina de inscripciones El Salvador</title>

<link href="../misEstilos/estilo.css" rel="stylesheet" type="text/css">
<link href="../misEstilos/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
<script src="../libs/validacion/jquery.validate.min.js"></script>
<script src="../libs/validacion/messages.js"></script>
<script language="javascript" src="js/jquery.js"></script>

 </head>
 <body>
  <header class="portada">
        
        <h1>Sistema de Inscripciones De El Salvador</h1>       
</header>
<div>
  <a href="../welcome.php" title="">MENU PRINCIPAL</a></b>
</div>
  
    <form class="form-horizontal" action="modificarPartido.php?action=con" 
      method="post" id="partido">
    
        <center><h1>Inscripción de Partidos</h1></center>

        <div class="form-group">
            <label class="col-md-4 control-label">Nombre del partido:</label>
            <div class="col-md-3">
                <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
                <input name="nombre" placeholder="Ingrese el nombre del partido" 
                class="form-control input-md" type="text" value='<?php print $datos[0][1]?>'>
            </div>
        </div>

        <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DUI:</label>  
  <div class="col-md-3">
  <input type="text" name="dui" value='<?php print $datos[0][2]?>' 
  style="width:300px" placeholder="Introdusca numero de Dui" 
      class="form-control" required=""/>
  </div>
</div>

        <div class="form-group">
           <label class="col-md-4 control-label" >Representante:</label>  
           <div class="col-md-3">
             <input  name="representante" placeholder="Ingrese el nombre del representante" 
            class="form-control input-md"  type="text" value='<?php print $datos[0][3]?>'>
        </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Imagen:</label>
            <div class="col-md-3">
                <input id="examinar" name="foto" class="input-file" type="file" 
                value='<?php print $datos[0][4]?>'>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-10">
            <button type="submit" name='bot' value='Enviar' class="btn btn-primary">GUARDAR</button>

            <br><br><b><a href="../welcome.php" title="">MENU PRINCIPAL</a></b>

            </div>
        </div>
    </form>
      </body>
</html>