<?php include 'coneccion.php';?>
<?php
$conexion = new mysqli('localhost', 'root', '','votaciones');
?>

<?php  
$sql ="SELECT * FROM inscrip_votante WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
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

<br><br><b><a href="./welcome.php" title="">MENU PRINCIPAL</a></b>

<form class="form-horizontal" action="modificarVotante.php?action=con" 
method="post" id="Votante">
  <center><h1><b>Inscripcion de Ciudadanos</b></h1></center>

  <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido:</label>  
  <div class="col-md-3">
  	<input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
  <input type="text" min="1" max="50" 
  required autocomplete="on" autofocus style="width:300px" name="apellidos" 
  value='<?php print $datos[0][1]?>'>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
  <div class="col-md-3">
 <input type="text" min="1" max="50" required autocomplete="on" 
 autofocus style="width:300px" 
name="nombres" value='<?php print $datos[0][2]?>'>
     </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Foto:</label>
  <input type="text" min="1" max="50" required autocomplete="on" 
  autofocus style="width:300px" 
  name="foto" value='<?php print $datos[0][3]?>'><br>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Genero:</label>
  <div class="col-md-2">
  	<select name="sexo" style="width:150px">
    			<?php
    $result = $conexion->query("SELECT * FROM sexo");
    $consu = $conexion->query("SELECT id,nombre FROM sexo 
      WHERE id = '".$datos[0][8]."'");
    $fila = $consu->fetch_assoc();
    echo '<option value="'.$fila['id'].'">';echo "seleccionado: ".utf8_encode($fila['nombre']).'</option>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['id'].'">'.utf8_encode($row['nombre']).'</option>';
        }
    }
			?>
		</select>
		    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DUI:</label>  
  <div class="col-md-3">
  <input type="text" name="n_dui" value='<?php print $datos[0][5]?>' 
  style="width:300px" placeholder="Introdusca numero de Dui" 
  class="form-control" required=""/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Expedición:</label>
  <div class="col-xs-2">
      <div class="input-group">                    
        <input type="text" name="fecha_expedicion" id="fechac" 
        class="required form-control" value='<?php print $datos[0][6]?>'>
        <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
  </div>            
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Residencia:</label> 
  <div class="col-md-3">
  <input id="textinput" name="residencia" 
  placeholder="Ingrese su dirección completa" 
  class="form-control input-md" required="" 
  type="text" value='<?php print $datos[0][7]?>'> 
  </div> 
</div>

<?php
$cone = new mysqli('localhost', 'root', '', 'votaciones');
?>
<div class="form-group">
   <div class="col-md-4">
   <label class="col-md-12 control-label">Departamento:</label>
   </div>
<div class="col-xs-3">
<select name="depto" id="depto">
    
			<?php
    $result = $conexion->query("SELECT * FROM departamento");
    $consu = $conexion->query("SELECT codigo,nombre FROM departamento 
      WHERE codigo = '".$datos[0][8]."'");
    $fila = $consu->fetch_assoc();
    echo '<option value="'.$fila['codigo'].'">';echo "seleccionado: ".utf8_encode($fila['nombre']).'</option>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
        }
    }
			?>
				
		    </select>

 </div>
</div>
<!-- Select Basic -->
<div class="form-group">
   <div class="col-md-4">
        <label class="col-md-12 control-label">Municipio:</label>
   </div>
<div class="col-xs-3">
<select name="municipio" id="municipio">
    	<?php
    	$consu = $conexion->query("SELECT codigo,nombre FROM municipio WHERE codigo = '".$datos[0][9]."'");
    $fila = $consu->fetch_assoc();
    echo '<option value="'.$fila['codigo'].'">';echo "seleccionado: ".utf8_encode($fila['nombre']).'</option>';
    			?>
			</select>
</div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-10">
    <button  type="submit" name='bot' value='Enviar' class="btn btn-primary">GUARDAR</button>
    
  </div>
</div>
</form>
<script type="text/javascript">
        $().ready(function () {
            $("#votacion").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
    </script>

<script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
<script type="text/javascript">
        $().ready(function () {
            $("#candidato").validate({});
        });
        
    </script>
</body>
</html>