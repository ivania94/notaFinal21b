<?php
$con = mysqli_connect('localhost','root','') or die(mysql_error());


if(isset($_POST['usuario']) && !empty($_POST['usuario']) &&
    isset($_POST['clave']) && !empty($_POST['clave'])
){

    $user=$_POST['usuario'];
    $pass=$_POST['clave'];

  $sql="SELECT* from votaciones.apertura where usuario='$user' && clave='$pass'";

    $result=mysqli_query($con,$sql) 
    or die("Ocurrio un error al hacer la consulta");


    $row=mysqli_fetch_array($result);
    if($row){

        session_start('apertura');
$_SESSION['sesionapertura'] = "Usuario: <spam>".$row['usuario']."</spam>";

        $mensaje = "El proceso electorar ha sido aperturado";
echo "<script>";
echo "alert('$mensaje');";  
echo "window.location = 'login.php';";
echo "</script>"; 

    }else
    {
        $mensaje = "Usuario o contraseña no valido";
echo "<script>";
echo "alert('$mensaje');";  
echo "window.location = 'login.php';";
echo "</script>";;
    }
}
else
    $mensaje = "algun campo esta vacio";
echo "<script>";
echo "alert('$mensaje');";  
echo "window.location = 'login.php';";
echo "</script>";;
?>