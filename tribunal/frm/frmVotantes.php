<?php include 'coneccion.php';?>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title></title>
     <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
      <link href="estilo.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="eje.css">
     <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
       <script src="../libs/jquery-2.1.0.js"></script>
       <script src="../libs/validacion/jquery.validate.min.js"></script>
       <script src="../libs/validacion/messages.js"></script>
       <script src="../libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
       <script src="../libs/validacion/validacion_text_y_num.js"></script>
    </head>
    
    <body>
    <center>
<header>
<h1><b>Sistema de Inscripciones De El Salvador</b></h1>
</header></center>

<section>
<hr border="3" color="black"></hr>
<center>
<nav>
  <ul>
        <li> <a href="../welcome.php">MENU PRINCIPAL</a> </li>
          <li> <a href="../emmasaira.php">CERRAR SESIÓN</a></li>

  </ul>
</nav>
</center>
</section>  
    
<form class="form-horizontal" action="ManejadorVotante.php?accion=save" method="post" id="Votante">
<center><h1><b>Inscripción de votante</b></h1></center>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Apellido:</label>  
  <div class="col-md-3">
  <input id="textinput" name="apellidos" 
  placeholder="Ingrese los apellidos del candidato" 
  class="form-control input-md" required="" type="text"> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
  <div class="col-md-3">
  <input id="textinput" name="nombres" placeholder="Ingrese el nombre del candidato" class="form-control input-md" required="" type="text"> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Foto:</label>
  <input id="" name="foto" class="input-file" type="file"><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Genero:</label>
  <div class="col-md-2">
   <select name='sexo' class="required form-control">
     <option value=""></option>
                 <?php 
                
                $sql = "SELECT id,nombre FROM sexo;";
                  $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id'];
                                print "'>";
                                print $value['nombre'];
                                print "</option>";
                            }                
                        ?>
                    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DUI:</label>  
  <div class="col-md-3">
  <input id="textinput" name="n_dui" 
  placeholder="00000000-0" 
  class="form-control input-md"  maxlength="10"
  minlength="10" required="true" onkeydown="return validarNumeros(event)">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Expedición:</label>
  <div class="col-xs-2">
      <div class="input-group">                    
        <input type="text" name="fecha_expedicion" id="fechac" class="required form-control">
        <span id="fechac" class=" input-group-addon glyphicon glyphicon-calendar"></span>
  </div>            
</div>
<br><br><br>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Residencia:</label> 
  <div class="col-md-3">
  <input id="textinput" name="residencia" 
  placeholder="Ingrese su dirección completa" class="form-control input-md" required="" type="text"> 
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
<select name="depto" id="depto" class="form-control input-md" required="">
    <option value="">------------------------</option>
    <?php
    $result = $cone->query("SELECT * FROM departamento");
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
<select name="municipio" id="municipio" class="form-control input-md" required="">
    <option value="">------------------------</option>
</select>
</div>
</div>
<center>
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-10">
    <button  type="submit" name='bot' value='Enviar' class="btn btn-primary">GUARDAR</button>
  </div>
</div>
</center>
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

</body>
</html>