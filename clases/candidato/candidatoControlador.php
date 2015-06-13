<?php
include_once './clases/candidato/candidato.php';
class ExamenControlador extends votacion{
   
    public function guardarDatos($con,$objvotacion) {
        $variableSql = "INSERT INTO votacion.candidatos";
        $variableSql .= "(id,dui,apellidos,nombres,genero,depto,";
        $variableSql .= "municipio,partido,deptocandidatura,municandidatura,cargo) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objvotacion[0]."',";
        $variableSql.="'".$objvotacion[1]."',";
        $variableSql.="'".$objvotacion[2]."',";
        $variableSql.="'".$objvotacion[3]."',";
        $variableSql.="'".$objvotacion[4]."',";
        $variableSql.="'".$objvotacion[5]."',";
        $variableSql.="'".$objvotacion[6]."',";
        $variableSql.="'".$objvotacion[7]."',";
        $variableSql.="'".$objvotacion[8]."',";
        $variableSql.="'".$objvotacion[9]."',";
        $variableSql.="'".$objvotacion[10]."');";
    return consultaA($con, $variableSql);
}

   public function modificarDatos($con,$objvotacion){
        $variableSql = "UPDATE votacion.candidatos SET ";
        $variableSql .= "dui = '".$objvotacion[1]."'";
        $variableSql .= ",apellidos = '".$objvotacion[2]."'";
        $variableSql .= ",nombres = '".$objvotacion[3]."'";        
        $variableSql .= ",genero = '".$objvotacion[4]."'";
        $variableSql .= ",depto = '".$objvotacion[5]."'";
        $variableSql .= ",municipio = '".$objvotacion[6]."'";
        $variableSql .= ",partido = '".$objvotacion[7]."'";
        $variableSql .= ",deptocandidatura = '".$objvotacion[8]."'";
        $variableSql .= ",municandidatura = '".$objvotacion[9]."'";
        $variableSql .= ",cargo = '".$objvotacion[10]."'";
        $variableSql .= "WHERE id= ".$objvotacion[0].";";
        return consultaA($con, $variableSql);
    }
      
   
}
