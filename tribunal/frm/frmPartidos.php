
<?php include 'coneccion.php';?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
      <title>formulario de inscripciones</title>
      <link href="estilo.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="eje.css">
      <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
      <script src="../libs/validacion/jquery.validate.min.js"></script>
      <script src="../libs/validacion/messages.js"></script>
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

	<form class="form-horizontal" action="ManejadorPartido.php?accion=save" method="post" id="partido">
	
		<center><h1>Inscripción de Partidos</h1></center>

		<div class="form-group">
			<label class="col-md-4 control-label">Nombre del partido:</label>
			<div class="col-md-3">
				<input name="nombre" placeholder="Ingrese el nombre del partido" 
				class="form-control input-md" type="text">
			</div>
		</div>

  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">DUI:</label>  
  <div class="col-md-3">
  <input type="text" name="dui" maxlength="10" placeholder="00000000-0" 
                   class="required form-control" minlength="10" required="true" 
                   onkeydown="return validarNumeros(event)">
 
  </div>
</div>

		<div class="form-group">
           <label class="col-md-4 control-label" >Representante:</label>  
           <div class="col-md-3">
             <input  name="representante" placeholder="Ingrese el nombre del representante" 
            class="form-control input-md"  type="text">
        </div>
        </div>

        <div class="form-group">
        	<label class="col-md-4 control-label">Bandera:</label>
        	<div class="col-md-3">
        		<input id="examinar" name="foto" class="input-file" type="file">
        	</div>
        </div>
        <center>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-10">
            <button type="submit" name='bot' value='Enviar' class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
        </center>
	</form>
</body>
</html>