<?php
include_once './clases/partido/partido.php';
class ExamenControlador extends votacion{
   
    public function guardarDatos($con,$objvotacion) {
        $variableSql = "INSERT INTO votacion.partido";
        $variableSql .= "(id,nombrepart,bandera,dui,";
        $variableSql .= "responsable) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objvotacion[0]."',";
        $variableSql.="'".$objvotacion[1]."',";
        $variableSql.="'".$objvotacion[2]."',";
        $variableSql.="'".$objvotacion[3]."',";
        $variableSql.="'".$objvotacion[4]."');";
        return consultaA($con, $variableSql);
}
  public function modificarDatos($con,$objvotacion){
        $variableSql = "UPDATE votacion.partido SET ";
        $variableSql .= "nombrepart = '".$objvotacion[1]."'";
        $variableSql .= ",bandera = '".$objvotacion[2]."'";
        $variableSql .= ",dui = '".$objvotacion[3]."'";
        $variableSql .= ",responsable = '".$objvotacion[4]."'";
        $variableSql .= "WHERE id = ".$objvotacion[0].";";
        return consultaA($con, $variableSql);
    }
       
}