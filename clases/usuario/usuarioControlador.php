<?php
include_once './clases/usuario/usuario.php';
class ExamenControlador extends votacion{
   
    public function guardarDatos($con,$objvotacion) {
        $variableSql = "INSERT INTO votacion.sesion";
        $variableSql .= "(id,usuario,clave,";
        $variableSql .= "nombre) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objvotacion[0]."',";
        $variableSql.="'".$objvotacion[1]."',";
        $variableSql.="'".$objvotacion[2]."',";
        $variableSql.="'".$objvotacion[3]."');";
        return consultaA($con, $variableSql);
}

 public function modificarDatos($con,$objvotacion) {
        $variableSql = "UPDATE votacion.votante SET  ";
        $variableSql .= "usuario = '".$objvotacion[1]."'";
        $variableSql .= "  ,clave = '".$objvotacion[2]."'";
        $variableSql .= " ,nombre = '".$objvotacion[3]."'";
        $variableSql .= " WHERE id = ".$objvotacion[0].";";                
        return consultaA($con, $variableSql);
        
        }
        
     //  $bandera = mysql_query($variableSql);
        
     //   if($bandera){
     //       $msg =" Datos almacenados";
    //    }else{
    //        $msg = "Error al almacenar los Datos # de error: ";
    //        $msg .= mysql_errno();
    //        $msg .="<br>";
    //        $msg .=mysql_error();
   //     }
        
    //    return $msg;
    
   
}
