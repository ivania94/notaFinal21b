<?php
include_once 'Partido.php';
class PartidoControlador extends Partido{
   
    public function guardarDatos($con,$objPartido) {
        $variableSql = "INSERT INTO inscrip_partido ";
        $variableSql .= "(id,nombre,dui,representante,";
        $variableSql .= "foto) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objPartido[0]."',";
        $variableSql.="'".$objPartido[1]."',";
        $variableSql.="'".$objPartido[2]."',";
        $variableSql.="'".$objPartido[3]."',";
        $variableSql.="'".$objPartido[4]."');";        
        return consultaA($con, $variableSql);
        
        }
        public function modificarDatos($con,$objPartido) {
        $variableSql = "UPDATE inscrip_partido SET  ";
        $variableSql .= "nombre = '".$objPartido[1]."'";
        $variableSql .= "dui = '".$objPartido[2]."'";
        $variableSql .= ",representante = '".$objPartido[3]."'";
        $variableSql .= ",foto = '".$objPartido[4]."'";
        $variableSql .= " WHERE id = ".$objPartido[0].";";                
        return consultaA($con, $variableSql);
        
        }
}